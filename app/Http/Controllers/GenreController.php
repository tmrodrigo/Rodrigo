<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function show($id)
    {

      $genre = Genre::find($id);

      return view('peliculas', [
        'generos' => $genre
      ]);
    }

    public function showGenres()
    {
      $genres = Genre::all();
      return view('genre', [
        'generos' => $genres
      ]);
    }
}
