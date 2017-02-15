@extends('layouts.master')

@section('title')
    Bonjour - rendu 1
@endsection

@section('content')
    <!-- Voir les erreurs -->
    @if(count($errors)>0)
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <ul>
                    @foreach($errors->all() as $error)
                    @endforeach
                </ul>
            </div>
        </div>
     <!-- Fin des erreurs -->

<div class="row">
    <div class="col-md-6">
        <h3>Inscription</h3>
        <form action="{{ route('signup') }}" method="post">
            <div class="form-group" {{ $errors->has('email') ? 'has-error': '' }}}>
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}" placeholder="email">
            </div>
            <div class="form-group" {{ $errors->has('name') ? 'has-error': '' }}}>
                <label for="name">Nom</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ Request::old('name') }}" placeholder="name">
            </div>
            <div class="form-group" {{ $errors->has('password') ? 'has-error': '' }}}>
                <label for="password">Mot de passe</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <input type="hidden" name="_token" value="{{ Session::taken() }}">
        </form>
    </div>


    <div class="col-md-6">
        <h3>Connexion</h3>
        <form action="{{ route('signin') }}" method="post">
            <div class="form-group" {{ $errors->has('email') ? 'has-error': '' }}}>
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}" placeholder="email">
            </div>
            <div class="form-group"{{ $errors->has('password') ? 'has-error': '' }}}>
                <label for="password">Mot de passe</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <input type="hidden" name="_token" value="{{ Session::taken() }}">
        </form>
    </div>
</div>
@endsection