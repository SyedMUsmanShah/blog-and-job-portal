<?php

namespace Modules\Metric\Http\Controllers\Backend;

use App\Authorizable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Backend\BackendBaseController;
use Modules\Job\Models\Job;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;

class MetricsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Metrics';

        // module name
        $this->module_name = 'metrics';

        // directory path of the module
        $this->module_path = 'metric::backend';

        // module icon
        $this->module_icon = 'fa fa-chart-simple';

        // module model name, path
        $this->module_model = "Modules\Metric\Models\Metric";
    }


    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::paginate();

        logUserAccess($module_title.' '.$module_action);

        $jobs = Job::all();

        return view(
            "$module_path.$module_name.index_datatable",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action', 'jobs')
        );
    }

    /**
     * Select Options for Select 2 Request/ Response.
     *
     * @return Response
     */
    public function index_list(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $term = trim($request->q);

        if (empty($term)) {
            return response()->json([]);
        }

        $query_data = $module_model::where('name', 'LIKE', "%$term%")->orWhere('slug', 'LIKE', "%$term%")->limit(7)->get();

        $$module_name = [];

        foreach ($query_data as $row) {
            $$module_name[] = [
                'id' => $row->id,
                'text' => $row->name.' (Slug: '.$row->slug.')',
            ];
        }

        return response()->json($$module_name);
    }

    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $page_heading = label_case($module_title);
        $title = $page_heading.' '.label_case($module_action);

        $$module_name = $module_model::select('id', 'name', 'updated_at');

        $data = $$module_name;

        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('name', '<strong>{{$name}}</strong>')
            ->editColumn('updated_at', function ($data) {
                $module_name = $this->module_name;

                $diff = Carbon::now()->diffInHours($data->updated_at);

                if ($diff < 25) {
                    return $data->updated_at->diffForHumans();
                } else {
                    return $data->updated_at->isoFormat('llll');
                }
            })
            ->rawColumns(['name', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }

}
