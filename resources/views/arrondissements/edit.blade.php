@extends('layout.layout')

@section('titre')
    Listes des arrondissements
@endsection

@section('content')
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Modifier un arrondissement</h2>
        </header>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3"><br>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('arrondissements.update', $arrondissement->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nom">Nom de l'Arrondissement</label>
                                <input type="text" name="nom" class="form-control"
                                    value="{{ old('nom', $arrondissement->nom) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="commune_id">Nom de la commune</label>
                                <select name="commune_id" class="form-control" required>
                                    @foreach ($communes as $commune)
                                        <option value="{{ $commune->id }}"
                                            {{ old('commune_id', $arrondissement->commune_id) == $commune->id ? 'selected' : '' }}>
                                            {{ $commune->nom }}
                                        </option>
                                    @endforeach
                                </select>

                            </div><br><br>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                            <a href="{{ route('arrondissements.index') }}" class="btn btn-success mr-">Annuler</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
