<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $guarded = [];

  protected $hidden = ['genre_id', 'length'];

  public function toJson($options = 0)
  {
    $this->load('genre', 'actors', 'actors.favoriteMovie');

    return parent::toJson(JSON_PRETTY_PRINT);
  }

  public function genre()
  {
    return $this->belongsTo(Genre::class);
  }

  public function mostrarPeli()
  {
    $nombre = $this->name;
    return $nombre;
  }
  public function actors()
  {
    return $this->belongsToMany(Actor::class);
  }

}
