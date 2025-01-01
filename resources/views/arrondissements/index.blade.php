@php
    \Carbon\Carbon::setLocale('fr');
@endphp

@extends('layout.layout')
@section('titre')
    Listes des arrondissements
@endsection

@section('content')
    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Liste des arrondissements</h2>
        </header>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <a href="{{ route('arrondissements.create') }}" class="btn btn-primary">Ajouter un arrondissement <i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div id="datatable-editable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dataTables_length" id="datatable-editable_length"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                                    aria-expanded="false" tabindex="0" aria-disabled="false"
                                    aria-labelledby="select2-datatable-editable_length-uj-container"><span
                                        class="select2-selection__rendered"
                                        id="select2-datatable-editable_length-uj-container" role="textbox"
                                        aria-readonly="</div></div><div class="col-lg-6">
                                        <div id="datatable-editable_filter" class="dataTables_filter"><label><br></label>
                                        </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0 dataTable no-footer" id="datatable-tabletools"
                            role="grid">
                            <thead>
                                <tr role="row">
                                    <th>Identifiant</th>
                                    <th>Nom</th>
                                    <th>Commune</th>
                                    <th>Création</th>
                                    <th>Dernière modification</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($arrondissements as $arrondissement)
                                    <tr>
                                        <td>{{ $arrondissement->id }}</td>
                                        <td>{{ $arrondissement->nom }}</td>
                                        <td>{{ $arrondissement->commune->nom }}</td>

                                        @isset($arrondissement->created_at)
                                            <td>{{ $arrondissement->created_at->diffForHumans() }}</td>
                                        @else
                                            <td>{{ $arrondissement->created_at }}</td>
                                        @endisset

                                        @isset($arrondissement->updated_at)
                                            <td>{{ $arrondissement->updated_at->diffForHumans() }}</td>
                                        @else
                                            <td>{{ $arrondissement->updated_at }}</td>
                                        @endisset

                                        <td class="actions text-center">
                                            <a href="{{ route('arrondissements.edit', $arrondissement->id) }}"
                                                class="on-default edit-row"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="{{ route('arrondissements.destroy', $arrondissement->id) }}"
                                                class="on-default remove-row" data-confirm-delete="true"><i
                                                    class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
