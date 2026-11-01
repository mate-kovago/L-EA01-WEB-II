<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uzenet_model;

class UzenetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $uzenetek = uzenet_model::orderBy('created_at', 'desc')->orderBy('id', 'desc')->get();

        return view('uzenetek', [
            'uzenetek' => $uzenetek
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('kapcsolat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'email'     => 'required|email|max:255',
            'uzenet'   => 'required|string',
            ]);
        try{
            uzenet_model::create($validated);
            return redirect('/kapcsolat')-> with('success', 'Az üzenet sikeresen el lett küldve!');
        }
        catch(\Exception $e){
            return redirect() ->back() -> withInput() -> with('failed', 'Nem sikerült az üzenetet elküldeni');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
