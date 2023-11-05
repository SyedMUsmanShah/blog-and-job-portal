<?php

namespace Modules\Application\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Application extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'applications';

    public static function getAllApplications(){
        $result = DB::table('applications')
        ->select('id','name','lname','email','number','message','designation')
        ->get()->toArray();
        return $result;
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Application\database\factories\ApplicationFactory::new();
    }
}
