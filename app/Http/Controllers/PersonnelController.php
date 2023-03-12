<?php

namespace App\Http\Controllers;

use App\Models\Engin;
use App\Models\Navire;
use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
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
    public function create(Request $request)
    {
        $navires = Navire::all();
        $navire_id = $request->navire_id;
        $engins = Engin::where('navire_id', "=",  $navire_id  )->get();
        return view('personnel.create', compact('engins', 'navires'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Personnel::create($request->all());
        return redirect()->route('personnel.create')->with('status', 'Personnel créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personnel $personnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $personnel = Personnel::find($id);
        $navires = Navire::all();
        $navire_id = $request->navire_id;
        $engins = Engin::where('navire_id', "=",  $navire_id  )->get();
        return view('personnel.edit', compact('personnel', 'engins', 'navires'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personnel $personnel,$id)
    {
        $personnel = Personnel::find($id);
        $personnel->update($request->all());
        return redirect()->route('navires.show',$personnel->navire_id)->with('status', 'Personnel modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $personnel = Personnel::find($id);
        $personnel->delete();
        return redirect()->route('navires.show',$personnel->navire_id)->with('status', 'Personnel supprimé avec succès');
    }
}
