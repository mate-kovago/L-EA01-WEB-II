<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\film_model;

class CRUDFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $filmek = film_model::all();

        return view('CRUDFilm', [
            'filmek' => $filmek
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('CreateFilm');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'cim'       => 'required|string|max:255',
            'gyartas'   => 'required|integer',
            'hossz'     => 'required|integer|min:1',
            'bemutato'  => 'required|date',
            'youtube'   => 'required|boolean',
            ]);
        try{
            film_model::create($validated);
            return redirect()-> route('CRUD.index')-> with('success', 'A film sikeresen hozzá adva!');
        }
        catch(\Exception $e){
            return redirect() ->back() -> withInput() -> with('failed', 'Nem sikerült a filmet hozzáadni!');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(film_model $CRUD)
    {
        //
        return view('ShowFilm', ['film' => $CRUD]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(film_model $CRUD)
    {
        //
        return view('EditFilm', ['film' => $CRUD]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, film_model $CRUD)
    {
        //
        $validated = $request->validate([
            'cim'       => 'required|string|max:255',
            'gyartas'   => 'required|integer',
            'hossz'     => 'required|integer|min:1',
            'bemutato'  => 'required|date',
            'youtube'   => 'required|boolean',
            ]);

        try{
            $CRUD ->update($validated);
            return redirect() -> route('CRUD.index') -> with('success', 'A film sikeresen módosítva');
        } 
        catch(\Exception $e){
            return redirect() -> back() -> withImput() -> with('failed', 'Nem sikerült a filmet módosítani');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(film_model $CRUD)
    {
        //
        try{
            $CRUD-> delete();

            return redirect() -> route('CRUD.index') -> with('success', 'A film sikeresen törölve');
        }
        catch(\Exception $e){
            return redirect() ->route('CRUD.index') -> with('failed', 'Nem sikerült a filmet trölni');
        }

    }
}
