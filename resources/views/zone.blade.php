@extends('template')
 
@section('contenu')
@if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    

<div class="card">
        <header class="card-header">
            <p class="card-header-title">zones</p>
            <a class="button is-info" href="{{ route('zone.create') }}">Créer une zone</a>

        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($zone as $zozo)
                            <tr>
                                <td>{{ $zozo->id }}</td>
                                <td><strong>{{ $zozo->nom_zone }}</strong></td>


                                <td>
                                    <form action="{{ route('zone.destroy', $zozo->id) }}" method="post">
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