<?php

namespace Modules\Metric\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Metric extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'metrics';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Metric\database\factories\MetricFactory::new();
    }
}
