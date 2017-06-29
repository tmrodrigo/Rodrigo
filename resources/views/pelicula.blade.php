<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Genre</title>
  </head>
  <body>
      <h1>{{ $pelicula->title }}</h1>
      <p>Rating: {{ $pelicula->rating }}</p>
      <p>Premios: {{ $pelicula->awards }}</p>
      <p>Fecha de Estreno: {{ $pelicula->release_date }}</p>

  </body>
</html>
