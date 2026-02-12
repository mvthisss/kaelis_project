@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
<div class="max-w-md mx-auto">
    <h1 class="text-2xl font-semibold text-stone-900 mb-6">Se connecter</h1>
    <form action="{{ route('login') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="email" class="block text-sm font-medium text-stone-700 mb-1">Adresse email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email"
                class="w-full rounded-lg border border-stone-300 px-3 py-2 focus:border-amber-500 focus:ring-1 focus:ring-amber-500">
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-stone-700 mb-1">Mot de passe</label>
            <input type="password" name="password" id="password" required autocomplete="current-password"
                class="w-full rounded-lg border border-stone-300 px-3 py-2 focus:border-amber-500 focus:ring-1 focus:ring-amber-500">
        </div>
        <div class="flex items-center">
            <input type="checkbox" name="remember" id="remember"
                class="rounded border-stone-300 text-amber-600 focus:ring-amber-500">
            <label for="remember" class="ml-2 text-sm text-stone-600">Se souvenir de moi</label>
        </div>
        <button type="submit" class="w-full bg-amber-600 text-white font-medium py-2.5 rounded-lg hover:bg-amber-700 focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
            Connexion
        </button>
    </form>
    <p class="mt-4 text-sm text-stone-600">
        Pas encore de compte ? <a href="{{ route('register') }}" class="text-amber-600 hover:underline">S'inscrire</a>
    </p>
</div>
@endsection
