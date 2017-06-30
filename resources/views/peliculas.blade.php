<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Peliculas</title>
  </head>
  <body>
    <h2>Las películas son:</h2>
    <ul>
      @foreach ($arrPeli as $peli)
        <li>
          <a href="/pelicula/{{$peli->id}}">{{$peli->title}}</a>
        </li>
      @endforeach
    </ul>
    {{ $arrPeli->links()}}
  </body>
</html>
