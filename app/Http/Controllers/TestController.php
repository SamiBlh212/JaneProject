<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Exception;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    // Si tu utilises une route GET pour afficher le formulaire, ajoute cette méthode :
    public function showTest()
    {
        return view('test'); // Vérifie que le fichier resources/views/test.blade.php existe
    }

    public function submitTest(Request $request)
    {
        // Définition des questions avec leur intitulé complet
        $questions = [
            'question1'  => 'Environnement et Épanouissement : « Quel environnement de travail (par exemple, travail en équipe, travail en autonomie, ambiance créative ou structurée) vous permet de vous sentir le plus épanoui(e) et pourquoi ? »',
            'question2'  => 'Sources de Motivation : « Quelles activités ou situations vous donnent l’impression d’être pleinement engagé(e) et motivé(e) ? Décrivez ce qui, dans ces contextes, résonne avec vos valeurs profondes. »',
            'question3'  => 'Gestion du Stress et Adaptabilité : « Comment réagissez-vous face aux imprévus et aux situations stressantes ? Pouvez-vous donner un exemple où votre manière de gérer l’adversité vous a permis de grandir ou d’apprendre ? »',
            'question4'  => 'Préférences d’Interaction : « Préférez-vous collaborer avec d’autres personnes ou travailler en solo pour atteindre vos objectifs ? Expliquez les raisons qui sous-tendent votre préférence. »',
            'question5'  => 'Vision de l’Avenir et Ambitions : « Quels rêves ou ambitions professionnels vous animent depuis toujours ? En quoi ces aspirations reflètent-elles votre personnalité et vos compétences uniques ? »',
            'question6'  => 'Équilibre et Bien-être Personnel : « Comment intégrez-vous vos passions et vos loisirs dans votre quotidien professionnel ou académique pour maintenir un équilibre harmonieux ? »',
            'question7'  => 'Prise de Décision et Logique : « Lorsqu’il s’agit de prendre une décision importante, quelle importance accordez-vous à l’analyse logique versus l’intuition ? Pouvez-vous illustrer avec une situation concrète ? »',
            'question8'  => 'Créativité et Résolution de Problèmes : « Dans quelle mesure vous sentez-vous à l’aise pour trouver des solutions originales à des problèmes complexes ? Décrivez un moment où votre créativité a fait la différence. »',
            'question9'  => 'Valeurs et Engagement Éthique : « Quelles sont les valeurs personnelles et professionnelles qui vous semblent non négociables dans votre parcours ? Comment ces valeurs influencent-elles vos choix de vie et de carrière ? »',
            'question10' => 'Feedback et Évolution Personnelle : « Comment accueillez-vous les retours constructifs sur votre travail ou vos actions ? Donnez un exemple où un feedback vous a conduit à une évolution personnelle ou professionnelle significative. »'
        ];

        // Validation des 10 questions : chaque champ doit être renseigné
        $rules = [];
        foreach ($questions as $key => $question) {
            $rules[$key] = 'required|string';
        }
        $validatedData = $request->validate($rules);

        // Construction du prompt d'entrée avec le contexte, l'objectif, les instructions et l'exemple attendu
        $inputPrompt = <<<EOT
Contexte :
Tu incarnes le conseiller en orientation professionnelle par excellence, doté d'une compréhension approfondie de la nature humaine et de la psychologie. En tant qu'expert du MBTI, tu analyses avec une précision inégalée les traits de personnalité, sans aucun préjugé ni stéréotype, en t'appuyant sur les recherches les plus récentes. Ta neutralité et ta rigueur analytique garantissent des conseils personnalisés et pertinents.

Objectif :
Analyser un formulaire complet (comprenant les questions posées et les réponses fournies par l'utilisateur) afin d'identifier les domaines de prédilection professionnelle et de recommander une liste de métiers. La réponse finale doit être fournie strictement sous forme de JSON, avec une clé unique (par exemple "metiers") associée à un tableau contenant des chaînes de caractères, chacune représentant un métier. Le tableau doit contenir au maximum 4 métiers.

Instructions pour le traitement du formulaire :
- Analyse minutieuse de chaque réponse du formulaire en te basant sur les principes du MBTI et les dernières avancées en psychologie.
- Identification claire des valeurs, motivations, compétences et aspirations de l'utilisateur.
- Sélection des métiers les plus adaptés à la personnalité et aux réponses fournies.
- La réponse finale doit être un objet JSON avec une seule clé ("metiers") dont la valeur est un tableau de chaînes de caractères.
- Assure-toi que le tableau contient au maximum 4 éléments, chaque élément étant une chaîne de caractères représentant un métier, sans données supplémentaires ni texte additionnel.

Système de gestion des erreurs et d'auto-évaluation :
- Avant de finaliser ta réponse, effectue une auto-évaluation pour confirmer que :
  1. Le tableau associé à la clé "metiers" contient au maximum 4 métiers.
  2. Chaque métier est représenté uniquement par une chaîne de caractères.
  3. Aucune donnée additionnelle n’est présente dans le JSON.
- Si l'auto-évaluation détecte un manquement au format exigé, corrige immédiatement la réponse pour qu'elle respecte strictement le format demandé.

Exemple de réponse attendue :
{
  "metiers": ["Développeur Front-End", "UI/UX Designer"]
}

Voici le formulaire complet avec les questions et les réponses :
EOT;

        // Construction dynamique du formulaire complet avec les thématiques et les réponses de l'utilisateur
        $formulaireComplet = "";
        foreach ($questions as $key => $questionText) {
            $answer = $validatedData[$key] ?? '';
            $formulaireComplet .= $questionText . "\nRéponse : " . $answer . "\n\n";
        }

        // Concaténation du prompt final en joignant l'inputPrompt et le formulaire complet
        $finalInput = $inputPrompt . "\n" . $formulaireComplet;

        // Construction de la partie "output" attendue (outputSchema)
        $outputSchema = 'output:{   "type": "object",   "properties": {     "metiers": {       "type": "array",       "items": {         "type": "string"       }     }   },   "required": [     "metiers"   ] }';

        // Construction du payload complet à envoyer à l'API Gemini 2
        $payload = [
            "contents" => [
                [
                    "role" => "user",
                    "parts" => [
                        [
                            "text" => $finalInput
                        ],
                        [
                            "text" => $outputSchema
                        ]
                    ]
                ]
            ],
            "generationConfig" => [
                "temperature" => 1,
                "topK" => 40,
                "topP" => 0.95,
                "maxOutputTokens" => 8192,
                "responseMimeType" => "application/json",
                "responseSchema" => [
                    "type" => "object",
                    "properties" => [
                        "metiers" => [
                            "type" => "array",
                            "items" => [
                                "type" => "string"
                            ],
                            "maxItems" => 4
                        ]
                    ],
                    "required" => ["metiers"]
                ]
            ]
        ];

        // Affichage du payload complet dans les logs pour tester dans la console de Gemini 2
        Log::info("Prompt envoyé à Gemini 2 : " . json_encode($payload, JSON_PRETTY_PRINT));

        // Récupérer la clé API depuis le fichier de configuration services.php
        $apiKey = config('services.gemini.token');
        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=" . $apiKey;

        // Envoi de la requête via Guzzle
        try {
            $client = new Client();
            $response = $client->post($url, [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => $payload,
            ]);

            $bodyResponse = json_decode($response->getBody(), true);

            // Log de la réponse pour le débogage
            Log::info("Réponse de Gemini 2 : " . json_encode($bodyResponse, JSON_PRETTY_PRINT));

            // Extraction du texte de réponse depuis le premier candidat
            $rawResponse = $bodyResponse['candidates'][0]['content']['parts'][0]['text'] ?? null;

            if ($rawResponse) {
                // Décodage du JSON renvoyé par l'API
                $decoded = json_decode($rawResponse, true);
                $metiers = $decoded['metiers'] ?? 'Aucune réponse formatée reçue.';
            } else {
                $metiers = 'Aucune réponse formatée reçue.';
            }
        } catch (Exception $e) {
            $metiers = "Erreur lors de la communication avec l'API : " . $e->getMessage();
            Log::error($metiers);
        }

        // Affichage du résultat dans la vue dédiée (resources/views/result.blade.php)
        return view('result', ['result' => $metiers]);
    }
}
