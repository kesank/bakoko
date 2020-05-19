@extends('template')
 
@section('contenu')
@if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    

<div class="card">
        <header class="card-header">
            <p class="card-header-title">logements</p>
            <a class="button is-info" href="{{ route('logement.create') }}">Créer un logement</a>

        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Nombre de pièce</th>
                            <th>Taille</th>
                            <th>Prix M-1</th>
                            <th>zone</th>
                            
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logements as $log)
                            <tr>
                                <td>{{ $log->id }}</td>
                                <td><strong>{{ $log->nom }}</strong></td>
                                <td><strong>{{ $log->nbr_piece }}</strong></td>
                                <td><strong>{{ $log->taille }}</strong></td>
                                <td><strong>{{ $log->prix }}</strong></td>
                                <td><strong>{{ $log->id_zone }}</strong></td>


                                <td><a class="button is-primary" href="{{ route('logement.show', $log->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('logement.edit', $log->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('logement.destroy', $log->id) }}" method="post">
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