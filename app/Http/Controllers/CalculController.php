<?php

namespace App\Http\Controllers;

use App\Models\Calcul;
use Illuminate\Http\Request;

class CalculController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calculs = Calcul::all();
        return view('calculs.index', compact('calculs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('calculs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Calcul::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $calcul = Calcul::find($id);

        return view('calculs.show', compact('calcul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $calcul = Calcul::find($id);

        return view('calculs.edit', compact('calcul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $calcul = Calcul::find($id);
        $calcul->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Calcul::destroy($id);
    }
}
