@php
    \Carbon\Carbon::setLocale('fr');
@endphp

@extends('layout.layout')
@section('titre')
    Liste des communes
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <section class="card">
        <header class="card-header">
            <h2 class="card-title">Communes</h2>
        </header>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <a href="{{ route('communes.create') }}">
                            <button id="addToTable" class="btn btn-primary">
                                Ajouter une commune <i class="fas fa-plus"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Nom</th>
                        <th>Département</th>
                        <th>Création</th>
                        <th>Dernière modification</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($communes as $commune)
                        <tr data-item-id="{{ $loop->index + 1 }}">
                            <td>{{ $commune->id }}</td>
                            <td>{{ $commune->nom }}</td>
                            <td>{{ $commune->departement->nom }}</td>
                            @isset($commune->created_at)
                                <td>{{ $commune->created_at->diffForHumans() }}</td>
                            @else
                                <td>{{ $commune->created_at }}</td>
                            @endisset

                            @isset($commune->updated_at)
                                <td>{{ $commune->updated_at->diffForHumans() }}</td>
                            @else
                                <td>{{ $commune->updated_at }}</td>
                            @endisset
                            <td class="actions">
                                <a href="{{ route('communes.edit', $commune->id) }}" class="on-default edit-row"><i
                                        class="fas fa-pencil-alt"></i></a>

                                <a href="{{ route('communes.destroy', $commune->id) }}" class="on-default remove-row"
                                    data-confirm-delete="true"><i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
