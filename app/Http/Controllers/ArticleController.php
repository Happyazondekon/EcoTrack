<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('auteurs')
            // ->published() // Utilise le scope pour récupérer uniquement les articles publiés
            ->latest()
            ->paginate(10);
        confirmDelete('Supprimer un article', 'Etes vous sûr de vouloir supprimer ce article');

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données
        $validatedData = $request->validate(Article::validationRules());

        // Créer l'article
        $article = Article::create($validatedData);

        // Vérifier si l'utilisateur authentifié est un auteur

        /** @var \App\Models\User $user */
        $user = Auth::user();
        if (Auth::check() && $user->isAuteur()) {
            // Associer l'auteur à l'article
            $article->auteurs()->attach(Auth::id());
        } else {
            return redirect()->back()->withErrors(['error' => 'Vous devez être un auteur pour créer un article.']);
        }

        // Redirection avec message de succès
        $message = $validatedData['statut'] === 'Publié' ? 'Article publié avec succès.' : 'Article enregistré en tant que brouillon.';

        if ($user->isAuteur()) {
            return redirect()->route('articles.all')->with('success', $message);
        }

        return redirect()->route('articles.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::with('auteurs')->findOrFail($id);

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::findOrFail($id);

        $validatedData = $request->validate(Article::validationRules());

        $article->update($validatedData);

        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);

        $article->auteurs()->detach(); // Supprime les relations dans la table pivot
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
