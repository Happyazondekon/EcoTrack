@extends('layout.layout')
@section('titre')
    Liste des articles
@endsection
@section('content')
    <section class="body">
        <!-- start: page -->
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
                            <a href="{{ route('articles.create') }}"><button id="addToTable" class="btn btn-primary">Ajout
                                    Articles <i class="fas fa-plus"></i></button></a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th>Statut</th>
                            <th>Auteur(s)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->titre }}</td>
                                <td style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"
                                    title="{{ $article->contenu }}">
                                    {{ $article->contenu }}
                                </td>

                                <td>{{ $article->statut }}</td>
                                <td>
                                    @if ($article->auteurs->isNotEmpty())
                                        <div class="authors-badges" style="display: flex; gap: 8px; flex-wrap: wrap;">
                                            @foreach ($article->auteurs as $auteur)
                                                <a class="badge badge-primary"
                                                    style="
                                                    background-color: #007bff;
                                                    color: white;
                                                    border-radius: 12px;
                                                    padding: 5px 10px;
                                                    font-size: 0.85rem;
                                                    font-weight: bold;"
                                                    href="{{ route('articles.show', $auteur->id) }}">
                                                    {{ $auteur->name }} {{ $auteur->prenom }}
                                                </a>
                                            @endforeach
                                        </div>
                                    @else
                                        <span class="text-muted">Aucun auteur pour cet article</span>
                                    @endif
                                </td>

                                <td class="actions">
                                    <!-- Bouton pour modifier -->
                                    <a href="{{ route('articles.edit', $article->id) }}" class="on-default edit-row"><i
                                            class="fas fa-pencil-alt"></i></a>

                                    <a href="{{ route('articles.destroy', $article->id) }}" class="on-default remove-row"
                                        data-confirm-delete="true">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </section>
        <!-- end: page -->
    </section>
    </div>

    <aside id="sidebar-right" class="sidebar-right">
        <div class="nano">
            <div class="nano-content">
                <a href="#" class="mobile-close d-md-none">
                    Collapse <i class="fas fa-chevron-right"></i>
                </a>

                <div class="sidebar-right-wrapper">

                    <div class="sidebar-widget widget-calendar">
                        <h6>Upcoming Tasks</h6>
                        <div data-plugin-datepicker data-plugin-skin="dark"></div>

                        <ul>
                            <li>
                                <time datetime="2023-04-19T00:00+00:00">04/19/2023</time>
                                <span>Company Meeting</span>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-widget widget-friends">
                        <h6>Friends</h6>
                        <ul>
                            <li class="status-online">
                                <figure class="profile-picture">
                                    <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-online">
                                <figure class="profile-picture">
                                    <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-offline">
                                <figure class="profile-picture">
                                    <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                            <li class="status-offline">
                                <figure class="profile-picture">
                                    <img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
                                </figure>
                                <div class="profile-info">
                                    <span class="name">Joseph Doe Junior</span>
                                    <span class="title">Hey, how are you?</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </aside>
    </section>
@endsection
