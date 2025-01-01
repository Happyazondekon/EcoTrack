@php
    \Carbon\Carbon::setLocale('fr');
@endphp

@extends('layout.layout')
@section('titre')
    Liste des rôles
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
            <div class="card-actions">
                <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
            </div>
            <h2 class="card-title">Rôles</h2>
        </header>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <a href="{{ route('roles.create') }}">
                            <button id="addToTable" class="btn btn-primary">
                                Ajouter un rôle <i class="fas fa-plus"></i>
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
                        <th>Création</th>
                        <th>Dernière modification</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr data-item-id="{{ $loop->index + 1 }}">
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->nom }}</td>
                            @isset($role->created_at)
                                <td>{{ $role->created_at->diffForHumans() }}</td>
                            @else
                                <td>{{ $role->created_at }}</td>
                            @endisset

                            @isset($role->updated_at)
                                <td>{{ $role->updated_at->diffForHumans() }}</td>
                            @else
                                <td>{{ $role->updated_at }}</td>
                            @endisset
                            <td class="actions">
                                <a href="{{ route('roles.edit', $role->id) }}" class="on-default edit-row"><i
                                        class="fas fa-pencil-alt"></i></a>

                                <a href="{{ route('roles.destroy', $role->id) }}" class="on-default remove-row"
                                    data-confirm-delete="true"><i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center mt-3">
            {{ $roles->links('pagination::bootstrap-5') }}
        </div>
    </section>
@endsection
