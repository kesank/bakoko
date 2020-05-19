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
        <form action="{{ route('locataire.search') }}" method="POST">
                    @csrf
                    <input type="text" name="search" placeholder="Entrez ce que vous recherchez">
                    <input type="submit" value="Envoyer !">


            </form>
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