<?php

namespace Modules\Job\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class JobsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Jobs';

        // module name
        $this->module_name = 'jobs';

        // directory path of the module
        $this->module_path = 'job::backend';

        // module icon
        $this->module_icon = 'fa fa-suitcase';

        // module model name, path
        $this->module_model = "Modules\Job\Models\Job";
    }

}
