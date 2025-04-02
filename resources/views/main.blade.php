<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Jane Orientation')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Inclure FontAwesome ou d'autres bibliothèques si nécessaire -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Vous pouvez ajouter d'autres balises meta ou liens CSS ici -->
</head>
<body>

    <!-- Header commun -->
    <header>
        <div class="header-container">
            <a href="{{ url('/') }}">
                <!-- Exemple de logo, à adapter selon vos fichiers -->
                <img src="{{ asset('assets/images/logo.png') }}" alt="Jane Orientation" class="logo">
            </a>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="{{ url('/test') }}">Test</a></li>
                    <li><a href="{{ url('/about') }}">À Propos</a></li>
                    <!-- Ajoutez d'autres liens de navigation ici -->
                </ul>
            </nav>
        </div>
    </header>

    <!-- Zone principale de contenu -->
    <main>
        @yield('content')
    </main>

    <!-- Footer commun -->
    <footer>
        <div class="footer-container">
            <p>&copy; {{ date('Y') }} Jane Orientation. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Scripts globaux -->
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>
