@extends('template')
@section('contenu')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Nom : {{ $logement->nom }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Taille : {{ $logement->taille }}</p>
                <hr>
                <p>Prix :{{ $logement->prix }}</p>
            </div>
        </div>
    </div>
@endsection