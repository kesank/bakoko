@extends('template')
 
@section('contenu')
<div class="card">
        <header class="card-header">
        <ul id="navigation">
                <li><a href="{{ route('locataire.create') }}" title="Créer Formulaire">Créer Formulaire</a></li>
                <li><a href="{{ route('locataire.search') }}" title="Recherche">Recherche</a></li>
                <li><a href="{{ route('locataire.index') }}" title="Liste Locataire">Liste Locataire</a></li>
            </ul>
            <p class="card-header-title">Modification d'un Locataire</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('locataire.store') }}" method="POST">
                    @csrf
                    <div class="field">
                    <label class="label" for="nom">Entrez votre nom : </label>
                    <div class="control">
                    <input class="input @error('nom') is-danger @enderror" type="text" name="nom" id="nom" value="{{ old('nom',$locataire->nom) }}"> <br>
                    </div>
                        @error('nom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                    <label class="label" for="prenom">Entrez votre prenom : </label>
                    <div class="control">
                    <input class="input @error('prenom') is-danger @enderror" type="text" name="prenom" id="prenom" value="{{ old('prenom',$locataire->prenom) }}"> <br>
                    </div>
                        @error('prenom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                    <label class="label" for="loyer">Entrez le prix du loyer : </label>
                    <div class="control">
                    <input class="input @error('loyer') is-danger @enderror" type="text" name="loyer" id="loyer" value="{{ old('loyer',$locataire->prix_mensuel) }}"><br>
                    </div>
                        @error('loyer')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                    <label class="label" for="creance">Entrez la créance : </label>
                    <div class="control">
                    <input class="input @error('creance') is-danger @enderror" type="text" name="creance" id="creance" value="{{ old('creance',$locataire->creance) }}"><br>
                    </div>
                        @error('creance')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="field">
                    <label class="label" for="impaye">Entrez les impayés : </label>
                    <div class="control">
                    <input class="input @error('impaye') is-danger @enderror" type="text" name="impaye" id="impaye" value="{{ old('impaye',$locataire->impaye) }}"><br>
                    </div>
                        @error('impaye')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                    <label class="label" for="id_bloc">Entrez le nom du bloc : </label>
                    <div class="control">
                    <input class="input @error('id_bloc') is-danger @enderror" type="text" name="id_bloc" id="id_bloc" value="{{ old('id_bloc',$locataire->id_bloc) }}"><br>
                    </div>
                        @error('id_bloc')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                    <label class="label" for="logement">Entrez le logement : </label>
                    <input class="input @error('logement') is-danger @enderror" type="text" name="id_logement" id="logement" value="{{ old('logement',$locataire->id_logement) }}">
                    </div>
                        @error('logement')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <input type="submit" value="Envoyer !">
                </form>
            </div>
        </div>
    </div>
@endsection