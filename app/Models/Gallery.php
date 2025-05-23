<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'album_id',
        'title',
        'path',
    ];

    /**
     * Get the album that owns the gallery
     */
    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }
}
