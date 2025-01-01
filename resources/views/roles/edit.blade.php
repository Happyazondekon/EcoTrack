@extends('layout.layout')

@section('titre')
    Modifier un rôle
@endsection

@section('content')
    <section class="card">
        <header class="card-header">
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
            </div>
            <h2 class="card-title">Rôle</h2>
        </header>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <a href="{{ route('roles.index') }}">
                            <button id="addToTable" class="btn btn-primary">
                                <i class="fas fa-arrow-left"></i>
                                Afficher les rôles
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Affichage des erreurs de validation --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('roles.update', $role->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="inputDefault">Nom</label>
                    <div class="col-lg-6">
                        <input type="text" name="nom" class="form-control" id="inputDefault"
                            value="{{ old('nom', $role->nom) }}" />
                        @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
