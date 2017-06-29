<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Peliculas</title>
  </head>
  <body>
    <h2>Las películas son:</h2>
    <ul>
      @foreach ($generos->movies as $pelicula)
        <li>
          <a href="/pelicula/{{$pelicula->id}}">{{$pelicula->title}}</a>
        </li>
      @endforeach
    </ul>
    <p>Género: {{ $generos->name }}</p>
  </body>
</html>
