<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'header_link',
        'footer_link',
        'multiple_pages',
        'has_children',
    ];

    protected $casts = [
        'footer_link' => 'boolean',
        'footer_link' => 'boolean',
        'multiple_pages' => 'boolean',
    ];

    /**
     * Get the category that owns the Subcategory
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get all of the pages for the Subcategory
     */
    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }

    /**
     * Get all of the morecategories belongs to subcategory
     */
    public function moreCategory(): HasMany
    {
        return $this->hasMany(Morecategory::class);
    }
}
