<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
        'header_link',
        'footer_link',
        'has_children',
        'multiple_pages',
    ];

    protected $casts = [
        'footer_link' => 'boolean',
        'footer_link' => 'boolean',
        'has_children' => 'boolean',
        'multiple_pages' => 'boolean',
    ];

    /**
     * Varify if category has subcategory and pags
     */
    public function isValidNavLink(): bool
    {
        if (! $this->has_children) {
            return false;
        }

        return $this->subcategories->contains(function ($subcategory) {
            return $subcategory->pages->isNotEmpty();
        });
    }

    /**
     * Get all of the subcategories for the Category
     */
    public function subcategories(): HasMany
    {
        return $this->hasMany(Subcategory::class);
    }

    /**
     * Get all of the pages for the Subcategory
     */
    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }
}
