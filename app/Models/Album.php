<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'icon',
    ];

    /**
     * Get all of the subcategories for the Category
     */
    public function images(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }
}
