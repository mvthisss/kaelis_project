@extends('layouts.app')

@section('title', 'Inscription')

@section('content')

    <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">
    </div>
    <div>
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">
    </div>
    <div>
        <label for="filiere">Filière</label>
        <select name="filiere" id="filiere" placeholder="Choisir une filière">
            <option value="MBS">MBS</option>
            <option value="GCM">GCM</option>
            <option value="ISI">ISI</option>    
            <option value="DA">DA</option>
            <option value="DDA">DDA</option>
            <option value="DDA">DDA</option>
        </select>
    </div>
    <div>
        <label for="niveau">Niveau</label>
        <select name="niveau" id="niveau" placeholder="Choisir un niveau">
            <option value="L1">L1</option>
            <option value="L2">L2</option>
            <option value="L3">L3</option>    
            <option value="M1">M1</option>
            <option value="M2">M2</option>
        </select>
    </div>
    <div>
        <label for="date_naissance">Date de naissance</label>
        <input type="date" id="date_naissance" name="date_naissance">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <label for="password_confirmation">Confirmer le mot de passe</label>
        <input type="password" id="password_confirmation" name="password_confirmation">
    </div>
    <button type="submit">S'inscrire</button>
</form>