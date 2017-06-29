<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Genre</title>
  </head>
  <body>
    <form class="" action="" method="get">
      <select class="" name="genre">
        @foreach ($generos as $genero)
          <option value="{{$genero->id}}">{{$genero->name}}</option>
        @endforeach
      </select>
      <input type="submit" name="" value="consultar">
    </form>
  </body>
</html>
