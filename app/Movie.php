<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $guarded = [];

  public function movies()
  {
    return $this->hasMany(Movie::class);
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
