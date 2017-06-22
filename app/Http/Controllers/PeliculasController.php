<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
  private $peliculas = [
    1 => "Toy Story",
    2 => "Buscando a Nemo",
    3 => "Avatar",
    4 => "Star Wars: Episodio V",
    5 => "Up",
    6 => "Mary and Max"
  ];

  public function buscarPeliculasId($id)
  {

    return 'La pelicula es: '. $this->peliculas[$id];

  }

  public function buscarPeliculasNombre($nombre)
  {
    $arrPel = [];
    foreach ($this->peliculas as $pelicula) {
      if (strpos($pelicula, $nombre) !== false) {
        $arrPel[] = $pelicula;
      }
    }
    if (!empty($arrPel)) {
      return $arrPel;
    }
    else {
      return "No se encontraron resultados";
    }

  }

  public function mostrarPelicula(){
    return view('peliculas', [
      'arrPeli' => $this->peliculas
    ]);
  }
}
