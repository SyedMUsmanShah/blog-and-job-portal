<?php

namespace Modules\Job\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'jobs';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Job\database\factories\JobFactory::new();
    }
}
