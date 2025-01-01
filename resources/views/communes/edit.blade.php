@extends('layout.layout')
@section('titre')
    Modifier un commune
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.css') }}" />
@endsection

@section('content')
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Communes</h2>
        </header>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <a href="{{ route('communes.index') }}">
                            <button id="addToTable" class="btn btn-primary">
                                <i class="fas fa-arrow-left"></i> Afficher les communes
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('communes.update', $commune->id) }}" class="form-horizontal form-bordered">
                @csrf
                @method('PUT')
                <div class="form-group row pb-4">
                    <div class="d-flex flex-column justify-content-center align-items-center"
                        style="width: 100%; max-width: 600px; margin: 0 auto;">
                        <div class="mb-3 w-100">
                            <label class="form-label" for="inputDefault">Nom</label>
                            <input type="text" name="nom" class="form-control" id="inputDefault" required
                                autocomplete="off" value="{{ old('nom', $commune->nom) }}" />
                        </div>
                        <div class="mb-3 w-100">
                            <label class="form-label" for="communeValue">Département</label>
                            <select data-plugin-selectTwo class="form-control populate" name="departement_id"
                                id="communeValue" required>
                                <option value="" disabled>Sélectionner un département</option>
                                @foreach ($departements as $departement)
                                    <option
                                        value="{{ $departement->id }}
                                            {{ old('departement_id', $commune->departement_id) == $departement->id ? 'selected' : '' }}">
                                        {{ $departement->nom }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
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

@section('js')
    <script src="{{ asset('vendor/select2/js/select2.js') }}"></script>
    <script src="{{ asset('vendor/jquery-maskedinput/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('vendor/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('vendor/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-maxlength/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('vendor/ios7-switch/ios7-switch.js') }}"></script>
@endsection
