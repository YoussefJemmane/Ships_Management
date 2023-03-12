<?php

namespace App\Http\Controllers;

use App\Models\Arret;
use App\Models\Engin;
use App\Models\Navire;
use App\Models\Personnel;
use Illuminate\Http\Request;

class NavireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $navires = Navire::all();
        return view('navire.index', compact('navires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('navire.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Navire::create($request->all());
        return redirect()->route('navires')->with('status', 'Navire créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function search(Navire $navire)
    {
        $numero_escale = request('numero_escale');
        $navires = Navire::where('numero_escale', "=",  $numero_escale  )->get();
        return view('navire.index', compact('navires'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(Navire $navire , $id)
    {
        $navire = Navire::find($id);
        $personnels = Personnel::where('navire_id', "=",  $id  )->get();
        $engins = Engin::where('navire_id', "=",  $id  )->get();
        $arrets = Arret::where('navire_id', "=",  $id  )->get();

        return view('navire.show', compact('navire', 'personnels' , 'engins', 'arrets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Navire $navire,$id)
    {
        $navire = Navire::find($id);
        return view('navire.edit', compact('navire'));
    }

    public function update(Request $request, $id)
    {
        $navire = Navire::find($id);
        $navire->update($request->all());
        return redirect()->route('navires')->with('status', 'Navire modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Navire $navire,$id)
    {
        $navire = Navire::find($id);
        $navire->delete();
        return redirect()->route('navires')->with('status', 'User deleted successfully');
    }
}
