@extends('main')

@section('title', 'Accueil - Jane Orientation')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/hp.css') }}">
@endsection

// remplacer le contenu ici, il sera injecté dans la balise main du template de base main.blade.php
@section('content')
<div class="hp-container">
    <h1>Bienvenue sur Jane Orientation</h1>
    <p>Ceci est la page d'accueil de votre projet.</p>
    <a href="{{ url('/test') }}" class="start-btn">Effectuer un test</a>
</div>
@endsection


@section('scripts')
    <script src="{{ asset('js/hp.js') }}"></script>
@endsection
