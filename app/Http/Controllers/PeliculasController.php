<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie

class PeliculasController extends Controller
{

  public function buscarPeliculasId($id)
  {

    return 'La pelicula es: '. $this->peliculas[$id];

  }

  public function buscarPeliculasNombre($nombre)
  {
    
  }

  public function mostrarPelicula(){
    return view('peliculas', [
      'arrPeli' => $this->peliculas
    ]);
  }
}
