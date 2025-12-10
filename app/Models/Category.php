<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id',
        'name',
        'slug',
        'description',
        'image',
        'parent_id',
        'depth',
        'position',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
