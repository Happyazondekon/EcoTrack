<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arrondissement;
use App\Models\Commune;
use App\Models\Departement;

class ArrondissementController extends Controller
{
    // Afficher la liste des arrondissements
    public function index()
    {
        $arrondissements = Arrondissement::all();
        confirmDelete(
            'Supprimer un arrondissement',
            'Etes vous sûr de vouloir supprimer cet arrondissement?'
        );
        return view('arrondissements.index', compact('arrondissements'));
    }

    // Afficher le formulaire de création d'un arrondissement
    public function create()
    {
        $communes = Commune::all();
        $departements = Departement::all();
        return view('arrondissements.create', compact('communes', 'departements'));
    }

    // Enregistrer un nouvel arrondissement
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'commune_id' => 'required|exists:communes,id',
        ]);

        Arrondissement::create($request->all());

        return redirect()->route('arrondissements.index')->with('success', 'Arrondissement créé avec succès.');
    }

    // Afficher un arrondissement spécifique
    public function show(Arrondissement $arrondissement)
    {
        return view('arrondissements.show', compact('arrondissement'));
    }

    // Afficher le formulaire d'édition d'un arrondissement
    public function edit(Arrondissement $arrondissement)
    {
        $communes = Commune::all();
        $departements = Departement::all();
        return view('arrondissements.edit', compact('arrondissement', 'communes', 'departements'));
    }

    // Mettre à jour un arrondissement
    public function update(Request $request, Arrondissement $arrondissement)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'commune_id' => 'required|exists:communes,id',
        ]);

        $arrondissement->update($request->all());

        return redirect()->route('arrondissements.index')->with('success', 'Arrondissement mis à jour avec succès.');
    }

    // Supprimer un arrondissement
    public function destroy(Arrondissement $arrondissement)
    {
        $arrondissement->delete();

        return redirect()->route('arrondissements.index')->with('success', 'Arrondissement supprimé avec succès.');
    }
}
