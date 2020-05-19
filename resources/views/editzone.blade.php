@extends('template')
 
@section('contenu')
<div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'une zone</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('zone.store') }}" method="POST">
                    @csrf
                    <div class="field">
                    <label class="label" for="nom">Entrez votre zone : </label>
                    <div class="control">
                    <input class="input @error('nom') is-danger @enderror" type="text" name="nom" id="nom" value="{{ old('nom',$zone->nom) }}"> <br>
                    </div>
                        @error('nom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <input type="submit" value="Envoyer !">
                </form>
            </div>
        </div>
    </div>
@endsection