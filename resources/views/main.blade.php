<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Jane Orientation')</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Inclure FontAwesome ou d'autres bibliothèques si nécessaire -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@400;700&family=Squada+One&display=swap" rel="stylesheet">
    @yield('styles')
</head>


<body>

    <!-- Header commun -->
    <header>
        <div class="header-placeholder"></div>
        <div class="header-container">
            <a href="{{ url('/') }}">
                <!-- Exemple de logo, à adapter selon vos fichiers -->
                <img src="{{ asset('assets/images/logo.png') }}" alt="Jane Orientation" class="logo">
            </a>
            <nav>
                <ul>
                    <li class="header-btn active"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="header-btn"><a href="{{ url('/blog') }}">Accueil</a></li>
                    <li class="header-btn"><a href="{{ url('/about') }}">À Propos</a></li>
                    <li class="header-btn"><a href="{{ url('/testimonials') }}">Testimonials</a></li>
                    <li class="header-btn"><a href="{{ url('/faq') }}">FAQ</a></li>
                    <li class="header-btn"><a href="{{ url('/contact') }}">contact</a></li>
                </ul>
                <ul>
                    <li class="header-btn header-start-test-btn">
                        <a href="{{ url('/test') }}">
                            commencer
                            <img src="{{ asset('assets/images/Sparkling.svg') }}" alt="Sparkling" class="button-svg">
                        </a>
                    </li>
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
