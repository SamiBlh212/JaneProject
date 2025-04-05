<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Résultat du test</title>
</head>
<body>
    <h1>Votre résultat de test Jane Orientation</h1>
    @if(is_array($result))
        <ul>
            @foreach($result as $metier)
                <li>{{ $metier }}</li>
            @endforeach
        </ul>
    @else
        <p>{{ $result }}</p>
    @endif
</body>
</html>
