<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
    ];
}
