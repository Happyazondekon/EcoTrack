@extends('layout.layout')
@section('titre') Ajout Articles @endsection
@section('content')
<section class="body">
    <!-- start: page -->
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">Ajout d'un Article</h2>
                </header>
                <div class="card-body">
                    <form class="form-horizontal form-bordered" method="POST" action="{{ route('articles.store') }}">
                        @csrf
                        <div class="form-group row pb-4">
                            <label class="col-lg-3 control-label text-lg-end pt-2" for="titre">Titre</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrez le titre" required>
                            </div>
                        </div>

                        <div class="form-group row pb-4">
                            <label class="col-lg-3 control-label text-lg-end pt-2" for="contenu">Contenu</label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="contenu" name="contenu" rows="5" placeholder="Entrez le contenu" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row pb-4">
                            <label class="col-lg-3 control-label text-lg-end pt-2" for="statut">Statut</label>
                            <div class="col-lg-6">
                                <select class="form-control" id="statut" name="statut" required>
                                    <option value="Brouillon">Brouillon</option>
                                    <option value="Publié">Publié</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-9 text-lg-end">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</section>
@endsection
