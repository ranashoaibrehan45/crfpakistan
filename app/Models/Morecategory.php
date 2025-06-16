<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Morecategory extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'subcategory_id',
        'name',
        'slug',
        'header_link',
        'footer_link',
        'multiple_pages',
    ];

    /**
     * Get the subcategory that owns the Morecategories
     */
    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }
}
