<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\Departement;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $communes = Commune::all();

        confirmDelete('Supprimer une commune', 'Etes vous sûr de vouloir supprimer cette commune ?');

        return view('communes.index', compact('communes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = Departement::all();

        return view('communes.create', compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Commune::create($request->all());

        return redirect()->route('communes.index')->with('success', 'Commune créée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commune = Commune::find($id);

        return view('communes.show', compact('commune'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $commune = Commune::find($id);
        $departements = Departement::all();

        return view('communes.edit', compact('commune', 'departements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $commune = Commune::find($id);
        $commune->update($request->all());

        return redirect()->route('communes.index')->with('success', 'Commune mise à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Commune::destroy($id);

        return redirect()->route('communes.index')->with('success', 'Commune supprimée avec succès !');
    }
}
