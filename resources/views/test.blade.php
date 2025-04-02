<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Test Jane Orientation</title>
    <!-- Lien vers le CSS spécifique de la page test -->
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <!-- Écran d'introduction -->
    <div class="intro-step" id="intro">
        <h2>EXPLOREZ VOTRE PERSONNALITÉ AVEC NOTRE TEST INTERACTIF</h2>
        <p class="intro-text">
            Répondez librement et sans filtres, vous ne serez jamais jugé.<br>
            Prenez le temps de soyer honnête avec vous-même.<br>
            Si vous avez du mal à répondre à certaines questions personnelles, <br>
            n'hésitez pas à demander l'avis de votre entourage pour mieux vous comprendre.<br>
            Ce test peut être passé une seule fois, mais nous le reprenons à tout moment <br>
            et sans limite de temps.
        </p>
        <button type="button" class="start-test" data-next="q1">
            COMMENCER LE TEST
            <img src="{{ asset('assets/images/Sparkling.svg') }}" alt="Sparkling" class="button-svg">
        </button>
    </div>

    <!-- Formulaire complet, contenant toutes les questions. Masqué tant qu’on est à l’étape intro -->
    <form action="{{ url('/test-submit') }}" method="POST" id="testForm" style="display:none;">
        @csrf

        <h1>Test Jane Orientation</h1>

        <!-- Question 1 -->
        <div class="question" id="q1">
            <label for="question1">
                1. Environnement et Épanouissement<br>
                « Quel environnement de travail (par exemple, travail en équipe, travail en autonomie, ambiance créative ou structurée)
                vous permet de vous sentir le plus épanoui(e) et pourquoi ? »
            </label>
            <textarea id="question1" name="question1" required>Je me sens épanoui en travaillant dans un environnement collaboratif et dynamique, car cela me permet d'échanger des idées et de stimuler ma créativité.</textarea>
            <div class="test-btn-container">
                <!-- Pour la première question, aucun bouton "Précédent" -->
                <button type="button" class="test-btn next-btn" data-next="q2">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="question" id="q2">
            <label for="question2">
                2. Sources de Motivation<br>
                « Quelles activités ou situations vous donnent l’impression d’être pleinement engagé(e) et motivé(e) ?
                Décrivez ce qui, dans ces contextes, résonne avec vos valeurs profondes. »
            </label>
            <textarea id="question2" name="question2" required>Je suis fortement motivé par des projets innovants et des défis qui me poussent à donner le meilleur de moi-même, surtout dans un cadre où l'on valorise l'excellence.</textarea>
            <div class="test-btn-container">
                <button type="button" class="test-btn prev-btn" data-prev="q1">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="test-btn next-btn" data-next="q3">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="question" id="q3">
            <label for="question3">
                3. Gestion du Stress et Adaptabilité<br>
                « Comment réagissez-vous face aux imprévus et aux situations stressantes ?
                Pouvez-vous donner un exemple où votre manière de gérer l’adversité vous a permis de grandir ou d’apprendre ? »
            </label>
            <textarea id="question3" name="question3" required>Face aux imprévus, je reste calme et cherche rapidement des solutions alternatives, comme lors d'un projet à échéance serrée où j'ai su adapter mes méthodes.</textarea>
            <div class="test-btn-container">
                <button type="button" class="test-btn prev-btn" data-prev="q2">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="test-btn next-btn" data-next="q4">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Question 4 -->
        <div class="question" id="q4">
            <label for="question4">
                4. Préférences d’Interaction<br>
                « Préférez-vous collaborer avec d’autres personnes ou travailler en solo pour atteindre vos objectifs ?
                Expliquez les raisons qui sous-tendent votre préférence. »
            </label>
            <textarea id="question4" name="question4" required>Je préfère collaborer avec d'autres personnes, car les échanges enrichissants me permettent d'apprendre et de progresser collectivement.</textarea>
            <div class="test-btn-container">
                <button type="button" class="test-btn prev-btn" data-prev="q3">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="test-btn next-btn" data-next="q5">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Question 5 -->
        <div class="question" id="q5">
            <label for="question5">
                5. Vision de l’Avenir et Ambitions<br>
                « Quels rêves ou ambitions professionnels vous animent depuis toujours ?
                En quoi ces aspirations reflètent-elles votre personnalité et vos compétences uniques ? »
            </label>
            <textarea id="question5" name="question5" required>Mon ambition est de devenir un expert reconnu dans le domaine de la communication digitale, un secteur qui correspond parfaitement à ma passion pour l'innovation.</textarea>
            <div class="test-btn-container">
                <button type="button" class="test-btn prev-btn" data-prev="q4">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="test-btn next-btn" data-next="q6">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Question 6 -->
        <div class="question" id="q6">
            <label for="question6">
                6. Équilibre et Bien-être Personnel<br>
                « Comment intégrez-vous vos passions et vos loisirs dans votre quotidien professionnel ou académique
                pour maintenir un équilibre harmonieux ? »
            </label>
            <textarea id="question6" name="question6" required>J'intègre mes passions telles que la photographie et le dessin dans ma routine, ce qui me permet de conserver un équilibre harmonieux entre vie professionnelle et personnelle.</textarea>
            <div class="test-btn-container">
                <button type="button" class="test-btn prev-btn" data-prev="q5">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="test-btn next-btn" data-next="q7">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Question 7 -->
        <div class="question" id="q7">
            <label for="question7">
                7. Prise de Décision et Logique<br>
                « Lorsqu’il s’agit de prendre une décision importante, quelle importance accordez-vous à l’analyse logique versus l’intuition ?
                Pouvez-vous illustrer avec une situation concrète ? »
            </label>
            <textarea id="question7" name="question7" required>Je privilégie une approche analytique et logique, mais je fais également confiance à mon intuition lors de situations de crise, comme lors de décisions stratégiques rapides.</textarea>
            <div class="test-btn-container">
                <button type="button" class="test-btn prev-btn" data-prev="q6">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="test-btn next-btn" data-next="q8">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Question 8 -->
        <div class="question" id="q8">
            <label for="question8">
                8. Créativité et Résolution de Problèmes<br>
                « Dans quelle mesure vous sentez-vous à l’aise pour trouver des solutions originales à des problèmes complexes ?
                Décrivez un moment où votre créativité a fait la différence. »
            </label>
            <textarea id="question8" name="question8" required>J'aime proposer des solutions originales, comme quand j'ai mis en place une nouvelle méthode de gestion de projet qui a amélioré la performance de mon équipe.</textarea>
            <div class="test-btn-container">
                <button type="button" class="test-btn prev-btn" data-prev="q7">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="test-btn next-btn" data-next="q9">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Question 9 -->
        <div class="question" id="q9">
            <label for="question9">
                9. Valeurs et Engagement Éthique<br>
                « Quelles sont les valeurs personnelles et professionnelles qui vous semblent non négociables dans votre parcours ?
                Comment ces valeurs influencent-elles vos choix de vie et de carrière ? »
            </label>
            <textarea id="question9" name="question9" required>Je considère l'intégrité, la transparence et le respect comme des valeurs fondamentales qui guident chacune de mes décisions professionnelles.</textarea>
            <div class="test-btn-container">
                <button type="button" class="test-btn prev-btn" data-prev="q8">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="test-btn next-btn" data-next="q10">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- Question 10 -->
        <div class="question" id="q10">
            <label for="question10">
                10. Feedback et Évolution Personnelle<br>
                « Comment accueillez-vous les retours constructifs sur votre travail ou vos actions ?
                Donnez un exemple où un feedback vous a conduit à une évolution personnelle ou professionnelle significative. »
            </label>
            <textarea id="question10" name="question10" required>Je valorise les retours constructifs, qui m'ont permis d'ajuster mes méthodes et de progresser significativement dans mon parcours professionnel.</textarea>
            <div class="test-btn-container">
                <button type="button" class="test-btn prev-btn" data-prev="q9">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </button>
                <button type="submit" class="test-btn submit-btn">Voir le résultat</button>
            </div>
        </div>
    </form>

    <!-- Lien vers le JS spécifique de la page test -->
    <script src="{{ asset('js/test.js') }}"></script>
</body>

</html>
