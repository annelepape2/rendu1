@extends('layouts.master')

@section('title')
    Bonjour
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <h3>Inscription</h3>
        <form action="{{ route('signup') }}" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="name">Nom</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="name">
            </div>
            <div class="form-group">
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
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>
@endsection