<?php

namespace App\Http\Controllers;

use App\Models\Engin;
use App\Models\Navire;
use Illuminate\Http\Request;

class EnginController extends Controller
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
        $navires = Navire::all();
        return view('engin.create', compact('navires'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Engin::create($request->all());
        return redirect()->route('engin.create')->with('status', 'Engin créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Engin $engin)
    {
        //
    }

    public function edit(Request $request, $id)
    {
        $engin = Engin::find($id);
        $navires = Navire::all();
        return view('engin.edit', compact( 'engin', 'navires'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        $engin = Engin::find($id);
        if ($engin->navire_id != $request->navire_id) {
            $engin->personnels()->delete();
            $engin->arrets()->delete();
        }
        $engin->update($request->all());
        return redirect()->route('navires.show',$engin->navire_id)->with('status', 'engin modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $engin = Engin::find($id);
        $engin->delete();
        return redirect()->route('navires.show',$engin->navire_id)->with('status', 'engin supprimé avec succès');
    }
}
