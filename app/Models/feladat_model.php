<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class feladat_model extends Model
{
    //
    protected $table='feladat';

    public function film(): BelongsTo
    {
        return $this->belongsTo(
            film_model::class,
            'filmid'
        );
    }

    public function szemely(): BelongsTo
    {
        return $this->belongsTo(
            szemely_model::class,
            'szemelyid'
        );
    }
}
