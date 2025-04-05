@extends('main')

@section('title', 'Accueil - Jane Orientation')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/hp.css') }}">
@endsection

@section('content')
<div class="loader">
    <div class="loader-content">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Jane Orientation" class="logo">
    </div>
</div>

<div class="hp-container">
    <div class="hero-banner">

        <div class="left-section">
            <div class="maquette-wrapper ">
                <p class="lines">
                    <span class="line purple-filled purple-outlined wave-underline" data-text="DESSINEZ VOTRE">
                        DESSINEZ VOTRE
                    </span>
                    <span class="line orange-outlined" data-text="parcours">
                        parcours
                    </span>

                    <span class="line orange-outlined" data-text="ET">
                        ET
                    </span>

                    <span class="line purple-filled purple-outlined wave-underline" data-text="AVENIR">
                        AVENIR
                    </span>

                    <span class="line orange-outlined" data-text="en realisant vos">
                        en realisant vos
                    </span>
                </p>

                <p class="lines">
                    <span class="line orange-outlined" data-text="rêves. faites">
                        rêves. faites
                    </span>

                    <span class="line purple-filled purple-outlined wave-underline" data-text="UN CHOIX À LA">
                        UN CHOIX À LA
                    </span>

                    <span class="line orange-outlined" data-text="HAUTEUR DE VOS AMBITIONS,">
                        HAUTEUR DE VOS AMBITIONS,
                    </span>

                    <span class="line orange-outlined" data-text=" UNE ÉTAPE À LA">
                        UNE ÉTAPE À LA
                    </span>

                    <!-- Dernier mot : VIOLET (plein) + cadre pointillé -->
                    <span class="dotted-rectangle">
                        <span class="line purple-filled purple-outlined wave-underline" data-text="FOIS">
                            FOIS
                        </span>
                    </span>
                </p>
            </div>

            <div class="info-container">
                <div class="text-container">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <p>Grâce à <strong>l'intelligence artificielle, Jane</strong> vous <strong>guide</strong> pour <strong>explorer, choisir</strong> et <strong>réussir</strong> un parcours sur mesure <strong>qui vous ressemble.</strong></p>
                </div>
                <div class="triangle"></div>
                <img src="{{ asset('assets/images/hero-line.png') }}" alt="hero-line" class="hero-line">
            </div>

            <div class="hero-left-bottom-section">
                <a href="{{ url('/test') }}" class="hero-test-btn">
                    <span>commencer</span>
                    <img src="{{ asset('assets/images/Sparkling.svg') }}" alt="Sparkling" class="button-svg">
                    <div class="gradient-container">
                        <div class="gradient-layer gradient1"></div>
                        <div class="gradient-layer gradient2"></div>
                        <div class="gradient-layer gradient3"></div>
                        <div class="gradient-layer gradient4"></div>
                    </div>
                    <div class="hover-bg-color"></div>
                </a>


                <div class="ad-container">
                    <div class="social-container ad-son-container">
                        <img src="{{ asset('assets/images/verified.png') }}" alt="verified" class="verified-icon">
                        <div class="text-container">
                            <p>
                                Suivez notre <span class="rounded">aventure</span> et soyez
                            </p>
                            <p>
                                <strong>les premiers</strong> à tout savoir en <span class="squared">exclusivité !</span>
                            </p>
                        </div>

                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/x.png') }}" alt="x" class="x-icon">
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/instagram.png') }}" alt="instagram" class="instagram-icon">
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/tiktok.png') }}" alt="tiktok" class="tiktok-icon">
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/linkedIn.png') }}" alt="linkedIn" class="linkedIn-icon">
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/pinterest.png') }}" alt="pinterest" class="pinterest-icon">
                            </li>
                        </ul>
                    </div>

                    <div class="feature-container ad-son-container">
                        <p>
                            Propulsé par <span class="rounded">les API</span>
                        </p>

                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/gemini.png') }}" alt="gemini" class="gemini-icon">
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/onisep.png') }}" alt="onisep" class="onisep-icon">
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/crous.png') }}" alt="crous" class="crous-icon">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="main-bento-shape">

            <div class="active-users">
                <p class="users-count">200+</p>
                <p>Utilisateurs actifs</p>
                <img src="{{ asset('assets/images/users.png') }}" alt="users" class="users-icon">
            </div>

            <div class="google-reviews">
                <div class="container">
                    <p class="rank">4,3</p>
                </div>

                <div class="container center">
                    <img src="{{ asset('assets/images/stars.png') }}" alt="stars" class="stars-icon">
                    <p>Basée sur 123 avis</p>
                </div>

                <div class="container">
                    <img src="{{ asset('assets/images/google.png') }}" alt="google" class="google-icon">
                </div>
            </div>

            <a href="#section2" class="scroll-down-container">
                <i class="fa fa-arrow-down" aria-hidden="true"></i>
            </a>


            <ul class="dots-container" data-images='["{{ asset("assets/images/hp1.jpg") }}", "{{ asset("assets/images/hp2.jpg") }}", "{{ asset("assets/images/hp3.jpg") }}"]'>
                <li class="dot-1 dots"></li>
                <li class="dot-2 dots"></li>
                <li class="dot-3 dots"></li>
            </ul>

            <div class="bento-container" style="position: relative; overflow: hidden;">
                <img class="bento-shape" src="{{ asset('assets/images/bentoShape.png') }}" alt="bento shape" />
                <!-- <img class="main-image" src="{{ asset('assets/images/hp1.jpg') }}" alt="main-img" /> -->
            </div>

        </div>


        <div class="hero-right-section">

            <div class="testimonial-container">
                <div class="testimonial top-container">
                    <button class="check-testimonial">
                        <i class="fa fa-arrow-down" aria-hidden="true"></i>
                    </button>
                    <img class="bento-shape" src="{{ asset('assets/images/bentoShape2.png') }}" alt="bento shape" />
                    <div>
                        <span class="name-pill">Marc</span>
                        <span class="age-pill">29 ans</span>
                    </div>
                    <img src="{{ asset('assets/images/marc.png') }}" alt="testimonial" class="testimonial-photo">
                </div>
                <div class="testimonial bottom-container">
                    <button class="check-testimonial">
                        <i class="fa fa-arrow-down" aria-hidden="true"></i>
                    </button>
                    <img class="bento-shape" src="{{ asset('assets/images/bentoShape2.png') }}" alt="bento shape" />
                    <div>
                        <span class="name-pill">léa</span>
                        <span class="age-pill">17 ans</span>
                    </div>
                    <img src="{{ asset('assets/images/lea.png') }}" alt="testimonial" class="testimonial-photo">
                </div>
            </div>


            <img src="{{ asset('assets/images/arrow1.png') }}" alt="arrow1" class="arrow1-icon">
            <div class="bottom-text">
                <h3>Découvrez <span>les témoignages</span> de ceux qui ont <span>changé de vie</span></h3>
                <p>
                    Laissez-vous
                    <span>inspirer</span>.
                    <img src="{{ asset('assets/images/wow.png') }}" alt="wow" class="wow-icon">
                </p>
            </div>

        </div>
    </div>

    <div class="section2" id="section2">
        <h2>Découvrez votre chemin, pas celui des autres</h2>
        <img src="{{ asset('assets/images/section2TextBehind.png') }}" alt="section2TextBehind" class="section2TextBehind">

        <div class="main">
            <div class="left-side">
                <div class="yellow-container">
                    <h3>Personnalisation Avancée</h3>
                    <p>Grâce à l'IA, découvrez des recommandations adaptées à vos compétences, intérêts et aspirations.</p>
                    <img src="{{ asset('assets/images/lightBulb.png') }}" alt="lightBulb" class="light-Bulb">
                </div>
                <div class="photo-container">
                    <div class="sparkle-decor">
                        <img src="{{ asset('assets/images/sparklingPc.png') }}" alt="sparklingPc" class="sparklingPc">
                    </div>
                    <div class="smile-decor">
                        <img src="{{ asset('assets/images/happy.png') }}" alt="happy" class="happy">
                    </div>
                    <img src="{{ asset('assets/images/girlSection2.png') }}" alt="girlSection2" class="girlSection2">
                    <img src="{{ asset('assets/images/section2shape.png') }}" alt="section2shape" class="section2shape">
                </div>
            </div>

            <div class="center">
                <div class="purple-container">
                    <h3>*2</h3>
                    <p>Faites un test d’orientation, l’IA identifie vos domaines de prédilection, puis validez avec un professionnel, le tout en deux étapes.</p>
                </div>
                <div class="blue-container">
                    <h3>*Des experts à vos côtés</h3>
                    <p>Des professionnels à votre écoute pour vous accompagner à chaque étape.</p>
                    <img src="{{ asset('assets/images/blueContainer.png') }}" alt="blueContainer" class="blueContainerImg">
                </div>
            </div>

            <div class="right-side">
                <div class="orange-container">
                    <h3>Des choix éclairés pour un avenir assuré</h3>
                    <p>Profitez d'analyses précises pour sélectionner les formations qui vous correspondent le mieux.</p>
                    <img src="{{ asset('assets/images/orangeContainer.png') }}" alt="orangeContainer" class="orangeContainerImg">
                    <img src="{{ asset('assets/images/whiteLogo.png') }}" alt="whiteLogo" class="whiteLogo">
                </div>
            </div>
        </div>
    </div>


    <div class="section3">
        <div class="left-side">
            <div class="vidExemple-wrapper">
                <img src="{{ asset('assets/images/vidExemple.jpg') }}" alt="vidExemple" class="vidExemple">
            </div>
            <div class="playbutton">
                <i class="fa fa-play" aria-hidden="true"></i>
            </div>
        </div>

        <div class="right-side">
            <p class="blue-pill pill">si une</p>
            <span class="arrowUp circle"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
            <span class="blue-pill pill">image vaut</span>
            <span class="orange-circle circle"></span>
            <p class="blue-border-pill pill">mille mots</p>
            <span class="right-arrow pill">
                <svg class="arrow-svg" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                    <polyline points="15,10 35,25 15,40" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="arrow-line"></div>
            </span>
            <span class="full-orange-border-pill pill">une video</span>
            <span class="arrow45degDown circle"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
            <span class="blue-pill pill">en dit</span>
            <span class="left-arrow pill">
                <svg class="arrow-svg" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                    <polyline points="15,10 35,25 15,40" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="arrow-line"></div>
            </span>
            <span class="blue-circle circle"></span>
            <span class="orange-border-pill pill">cent fois</span>
            <span class="arrow45degUp circle"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
            <span class="rose-border-pill pill">plus</span>
            <span class="blue-empty-pill pill"></span>
            <span class="blue-border-circle circle"></span>
        </div>
    </div>

</div>
@endsection


@section('scripts')
<script src="{{ asset('js/hp.js') }}"></script>
@endsection
