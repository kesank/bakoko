@extends('template')
 
@section('contenu')
<div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un logement</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('logement.store') }}" method="POST">
                    @csrf
                    <div class="field">
                    <label class="label" for="nom">Entrez votre nom : </label>
                    <div class="control">
                    <input class="input @error('nom') is-danger @enderror" type="text" name="nom" id="nom" value="{{ old('nom',$logement->nom) }}"> <br>
                    </div>
                        @error('nom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                    <label class="label" for="prenom">Entrez le nombre de pièce: </label>
                    <div class="control">
                    <input class="input @error('prenom') is-danger @enderror" type="text" name="nbr_piece" id="prenom" value="{{ old('nbr_piece',$logement->nbr_piece) }}"> <br>
                    </div>
                        @error('prenom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                    <label class="label" for="loyer">Entrez le prix du loyer : </label>
                    <div class="control">
                    <input class="input @error('loyer') is-danger @enderror" type="text" name="prix" id="loyer" value="{{ old('prix',$logement->prix) }}"><br>
                    </div>
                        @error('loyer')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                    <label class="label" for="creance">Entrez la taille : </label>
                    <div class="control">
                    <input class="input @error('creance') is-danger @enderror" type="text" name="taille" id="creance" value="{{ old('taille',$logement->taille) }}"><br>
                    </div>
                        @error('creance')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="field">
                    <label class="label" for="impaye">Entrez le bloc : </label>
                    <div class="control">
                    <input class="input @error('impaye') is-danger @enderror" type="text" name="id_zone" id="impaye" value="{{ old('id_zone',$logement->id_zone) }}"><br>
                    </div>
                        @error('impaye')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <input type="submit" value="Envoyer !">
                </form>
            </div>
        </div>
    </div>
@endsection