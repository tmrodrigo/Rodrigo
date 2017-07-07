<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  protected $hidden = ['pivot', 'favorite_movie_id'];

  public function getNombreCompleto(){
    $nombre = $this->first_name;
    $apellido = $this->last_name;

    return $nombre . " " . $apellido;
  }

  public function toJson($options = 0)
  {
    $this->load('favoriteMovie');

    return parent::toJson(JSON_PRETTY_PRINT);
  }

  public function favoriteMovie()
  {
    return $this->belongsTo(Movie::class, 'favorite_movie_id');
  }

  public function movies()
  {
    return $this->belongsToMany(Movie::class);
  }
}
