<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements = Departement::all();
        // $departements = Departement::paginate(20);

        // dd($departements);
        confirmDelete('Supprimer un département', 'Etes vous sûr de vouloir supprimer ce département');
        return view('departements.index', compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Departement::create($request->all());

        return redirect()->route('departements.index')->with('success', 'Département créé avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $departement = Departement::find($id);

        return view('departements.show', compact('departement'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departement = Departement::find($id);

        return view('departements.edit', compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $departement = Departement::find($id);
        $departement->update($request->all());

        return redirect()->route('departements.index')->with('success', 'Département modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Departement::destroy($id);

        return redirect()->route('departements.index')->with('success', 'Département supprimé avec succès!');
    }
}
