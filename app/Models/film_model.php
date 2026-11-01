<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class film_model extends Model
{
    //
    protected $table='film';
    protected $fillable=['cim','gyartas', 'hossz', 'bemutato', 'youtube'];

    public function feladatok(): HasMany
    {
        return $this->hasMany(
            feladat_model::class,
            'filmid'
        );
    }
}
