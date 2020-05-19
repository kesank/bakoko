@extends('template')
 
@section('contenu')
@if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    

<div class="card">
        <header class="card-header">
            <p class="card-header-title">locataires</p>
            <ul id="navigation">
        <li><a href="{{ route('locataire.create') }}" title="Créer Formulaire">Créer Formulaire</a></li>
        <li><a href="{{ route('locataire.search') }}" title="Recherche">Recherche</a></li>
        <li><a href="{{ route('locataire.index') }}" title="Liste Locataire">Liste Locataire</a></li>
    </ul>
            <a class="button is-info" href="{{ route('locataire.create') }}">Créer un Locataire</a>

        </header>

        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Loyer</th>
                            <th>Créance M-1</th>
                            <th>Impayés M-1</th>
                            <th> Nom du logement</th>
                            <th>Nom du bloc</th>
                            <th>Créance</th>
                            <th>Dettes</th>
                            <th>Soldes</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($locataires as $locataire)
                            <tr>
                                <td>{{ $locataire->id }}</td>
                                <td><strong>{{ $locataire->nom }}</strong></td>
                                <td><strong>{{ $locataire->prenom }}</strong></td>
                                <td><strong>{{ $locataire->prix_mensuel }}</strong></td>
                                <td><strong>{{ $locataire->creance_m1 }}</strong></td>
                                <td><strong>{{ $locataire->impaye_m1 }}</strong></td>
                                <td><strong>{{ $locataire->id_logement }}</strong></td>
                                <td><strong>{{ $locataire->id_bloc }}</strong></td>
                                <td><strong>{{ $locataire->creance }}</strong></td>
                                <td><strong>{{ $locataire->dette }}</strong></td>
                                <td><strong>{{ $locataire->solde }}</strong></td>


                                <td><a class="button is-primary" href="{{ route('locataire.show', $locataire->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('locataire.edit', $locataire->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('locataire.destroy', $locataire->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="card-footer">
            {{ $locataires->links() }}
        </footer>
    </div>
    @section('css')
    <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }
    </style>


@endsection