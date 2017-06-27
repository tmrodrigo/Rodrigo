<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
      @if (count($errors))
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
        <form id="agregarPelicula" name="agregarPelicula" method="POST" action="agregarPelicula/agregar">
            <div class="">
               {{ csrf_field() }}
            </div>
            <div>
                <label for="title">Titulo</label>
                <input type="text" name="title" id="titulo" value="{{ old('titulo') }}"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" value="{{ old('rating') }}" id="rating"/>
            </div>
            <div>
                <label for="awards">Premios</label>
                <input type="text" name="awards" value="{{ old('premios') }}" id="premios"/>
            </div>
            <div>
                <label for="length">Duracion</label>
                <input type="text" name="length" value="{{ old('duracion') }}" id="duracion"/>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <input type="date" name="release_date" value="">
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>
