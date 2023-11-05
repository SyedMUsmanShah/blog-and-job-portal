<?php

namespace Modules\Blog\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'blogs';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Blog\database\factories\BlogFactory::new();
    }
}
