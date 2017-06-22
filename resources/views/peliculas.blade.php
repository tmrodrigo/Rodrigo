<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Peliculas</title>
  </head>
  <body>
    <ul>
      @foreach ($arrPeli as $pelicula)
        <li>{{$pelicula}}</li>
      @endforeach
    </ul>
  </body>
</html>
