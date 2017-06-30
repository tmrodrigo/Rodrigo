<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Genre</title>
  </head>
  <body>
      <h1>{{ $pelis->title }}</h1>
      <p>Rating: {{ $pelis->rating }}</p>
      <p>Premios: {{ $pelis->awards }}</p>
      <p>Fecha de Estreno: {{ $pelis->release_date }}</p>
      <h1>Y actuaron:</h1>
      <ul>
        @foreach ($actors as $actor)
          <li>{{ $actor->first_name }} {{ $actor->last_name }}</li>
        @endforeach
      </ul>
  </body>
</html>
