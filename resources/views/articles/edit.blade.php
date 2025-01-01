@extends('layout.layout')
@section('titre')
    Modifier un article
@endsection

@section('content')
    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
            </div>
            <h2 class="card-title">Articles</h2>
        </header>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <a href="{{ route('articles.index') }}">
                            <button id="addToTable" class="btn btn-primary">
                                Afficher les articles
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('articles.update', $article->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="titre">Titre</label>
                    <div class="col-lg-6">
                        <input type="text" name="titre" class="form-control" id="titre"
                            value="{{ $article->titre }}" />
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="contenu">Contenu</label>
                    <div class="col-lg-6">
                        <textarea name="contenu" class="form-control" id="contenu">{{ $article->contenu }}</textarea>
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="statut">Statut</label>
                    <div class="col-lg-6">
                        <select name="statut" id="statut" class="form-control">
                            <option value="Publié" {{ $article->statut == 'Publié' ? 'selected' : '' }}>Publié</option>
                            <option value="Brouillon" {{ $article->statut == 'Brouillon' ? 'selected' : '' }}>Brouillon</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6 offset-lg-3">
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
