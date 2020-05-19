@extends('template')
@section('contenu')
    <div class="card">
        <ul id="navigation">
                <li><a href="{{ route('locataire.create') }}" title="Créer Formulaire">Créer Formulaire</a></li>
                <li><a href="{{ route('locataire.search') }}" title="Recherche">Recherche</a></li>
                <li><a href="{{ route('locataire.index') }}" title="Liste Locataire">Liste Locataire</a></li>
            </ul>
        <header class="card-header">
            
            <p class="card-header-title">Nom : {{ $locataire->nom }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Prenom : {{ $locataire->prenom }}</p>
                <hr>
                <p>{{ $locataire->impaye_m1 }}</p>
                <p><a href="{{action('locataireController@downloadPDF', $locataire->id)}}">Download PDF</a></p>
            </div>
        </div>
    </div>
@endsection