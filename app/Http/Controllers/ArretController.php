<?php

namespace App\Http\Controllers;

use App\Models\Arret;
use App\Models\Engin;
use App\Models\Navire;
use Illuminate\Http\Request;

class ArretController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $engins = Engin::all();
        $navires = Navire::all();
        return view('arret.create', compact('engins', 'navires'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Arret::create($request->all());
        return redirect()->route('arret.create')->with('status', 'Arret créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Arret $arret)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $arret = Arret::find($id);
        $navires = Navire::all();
        $navire_id = $request->navire_id;
        $engins = Engin::where('navire_id', "=",  $navire_id  )->get();
        return view('arret.edit', compact('engins', 'navires', 'arret'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        $arret = Arret::find($id);
        $arret->update($request->all());
        return redirect()->route('navires.show',$arret->navire_id)->with('status', 'arret modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $arret = Arret::find($id);
        $arret->delete();
        return redirect()->route('navires.show',$arret->navire_id)->with('status', 'arret supprimé avec succès');
    }
}
