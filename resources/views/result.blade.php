<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Résultat du Test</title>
  <link rel="stylesheet" href="{{ asset('css/result.css') }}">
</head>
<body>
  <h1>Résultat du Test Jane Orientation</h1>
  <div class="result-container">
    {{-- Ici, on suppose que $result est soit un tableau de métiers, soit un message d'erreur --}}
    @if(is_array($result))
      <ul>
        @foreach($result as $metier)
          <li>{{ $metier }}</li>
        @endforeach
      </ul>
    @else
      {!! nl2br(e($result)) !!}
    @endif
  </div>
  <a href="{{ url('/test') }}">Recommencer le test</a>
</body>
</html>
