<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\film_model;
use Illuminate\View\View;

class FilmController extends Controller
{
    //
    public function index(): View
    {
        $filmek = film_model::with([
            'feladatok' => function ($query) {
                $query
                    ->where('megnevezes', 'rendező')
                    ->orderBy('id', 'asc')
                    ->with('szemely');
            }
        ])
        ->orderBy('cim')
        ->get();

        return view('filmek.index', [
            'filmek' => $filmek
        ]);
    }
}
