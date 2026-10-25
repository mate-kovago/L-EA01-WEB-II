<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class szemely_model extends Model
{
    //
    protected $table='szemely';

    public function feladatok(): HasMany
    {
        return $this->hasMany(
            feladat_model::class,
            'szemelyid'
        );
    }
}
