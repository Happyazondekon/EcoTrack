@extends('layout.layout')

@section('titre')
    Listes des arrondissements
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.css') }}" />
@endsection

@section('content')
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Ajouter un arrondissement</h2>
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

                        <form action="{{ route('arrondissements.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nom">Nom de l'Arrondissement</label>
                                <input type="text" name="nom" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="commune_id">Nom de la commune</label>
                                <select data-plugin-selectTwo class="form-control populate placeholder" name="commune_id"
                                    id="commune_id"
                                    data-plugin-options='{ "placeholder": "Sélectionner une commune", "allowClear": true }'>
                                    <option value="">Sélectionner une commune</option>
                                    @foreach ($departements as $departement)
                                        <optgroup label="{{ $departement->nom }}">
                                            @foreach ($communes->where('departement_id', $departement->id) as $commune)
                                                <option value="{{ $commune->id }}">{{ $commune->nom }}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>

                            </div><br><br>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('vendor/select2/js/select2.js') }}"></script>
    <script src="{{ asset('vendor/jquery-maskedinput/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('vendor/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('vendor/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('vendor/ios7-switch/ios7-switch.js') }}"></script>
@endsection
