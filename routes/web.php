<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('genre', 'GenreController@showGenres');

Route::get('genre/{id}', 'GenreController@show');

Route::get('peliculas', 'PeliculasController@mostrarPelicula');

Route::get('/peliculas/buscar', 'PeliculasController@buscarPeliculasNombre');

Route::get('/pelicula/{id}', 'PeliculasController@buscarPeliculaId');

Route::get('/actores', 'ActorController@directory');

Route::get('/agregarPelicula', function(){
  return view('agregarPelicula');
});

Route::post('/agregarPelicula/agregar', 'PeliculasController@agregarPelicula');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
