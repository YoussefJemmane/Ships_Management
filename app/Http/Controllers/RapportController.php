<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RapportController extends Controller
{

    public function create()
    {
        $rapport = Rapport::all();
        $nom = User::all();
        return view('rapport.create', compact('rapport', 'nom'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'date_rapport' => ['required', 'string', 'max:255'],
            'shift' => ['required', 'integer', 'max:3', 'min:1'],
        ]);
        $user_id = Auth::id();
        $rapport = new Rapport;
        $rapport->title = $request->input('title');
        $rapport->description = $request->input('description');
        $rapport->date_rapport = $request->input('date_rapport');
        $rapport->shift = $request->input('shift');
        $rapport->user_id = $user_id;
        $rapport->save();

        return redirect()->route('rapport')->with('status', 'Rapport créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function index(Rapport $rapport)
    {
        $rapports = Rapport::all();
        return view('rapport.index', compact('rapports'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rapport $rapport, $id)
    {
        $rapport = Rapport::find($id);
        return view('rapport.edit', compact('rapport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rapport $rapport, $id)
    {
        $rapport = Rapport::find($id);
        $rapport->update($request->all());
        return redirect()->route('rapport.index')->with('status', 'rapport modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rapport $rapport, $id)
    {
        $rapport = Rapport::find($id);
        $rapport->delete();
        return redirect()->route('rapport.index')->with('status', 'Rapport supprimé avec succès');
    }
    public function search(Rapport $rapport)
    {
        $date_rapport = request('date_rapport');
        $shift = request('shift');
        $rapports = Rapport::where('date_rapport', "=",  $date_rapport  )->get();
        return view('rapport.index', compact('rapports'));
    }
    public function show(Rapport $rapport, $id )
    {
        $rapport = Rapport::find($id);
        return view('rapport.show', compact('rapport'));
    }
}
