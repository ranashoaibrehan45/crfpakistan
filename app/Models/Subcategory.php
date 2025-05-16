<?php

namespace App\Models;

use Illuminate\Category\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
    ];

    /**
     * Get the category that owns the Subcategory
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the page associated with the Subcategory
     */
    public function page(): HasOne
    {
        return $this->hasOne(Page::class);
    }
}
