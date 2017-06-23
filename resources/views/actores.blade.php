<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>actores</title>
  </head>
  <body>
    <h1>Los Actores son</h1>
    <ul>
      @foreach ($actores as $actor)
        <li>{{ $actor->getNombreCompleto() }}</li>        
      @endforeach
    </ul>
  </body>
</html>
