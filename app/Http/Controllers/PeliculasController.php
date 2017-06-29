<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PeliculasController extends Controller
{

  public function buscarPeliculaId($id)
  {
    $pelicula = Movie::find($id);
    return view('pelicula', [
      'pelicula' => $pelicula
    ]);
  }

  public function buscarPeliculasNombre($nombre)
  {

  }

  public function mostrarPelicula()
  {
    return view('peliculas', [
      'arrPeli' => $this->peliculas
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
