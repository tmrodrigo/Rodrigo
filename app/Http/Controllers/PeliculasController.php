<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Actor;

class PeliculasController extends Controller
{

  public function buscarPeliculaId($id)
  {

    $pelicula = Movie::find($id);
    $actorsMovie = $pelicula->actors;

    return view('pelicula', [
      'pelis' => $pelicula,
      'actors' => $actorsMovie
    ]);

  }

  public function mostrarPelicula()
  {
    $pelicula = Movie::orderBy('title')->paginate(10);
    return view('peliculas', [
      'arrPeli' => $pelicula
    ]);
  }

  public function agregarPelicula(Request $request)
  {
    $this->validate($request, [
      'title' => 'required',
      'rating' => 'required',
      'awards' => 'required',
      'length' => 'required',
      'release_date' => 'required'
    ]);

    $params = [
      'title' => $request->input('title'),
      'rating' => $request->input('rating'),
      'awards' => $request->input('awards'),
      'length' => $request->input('length'),
      'release_date' => $request->input('release_date')
    ];

    $movie = Movie::create($params);

  }
}
