<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  protected $guarded = [];

  protected $hidden = ['created_at', 'updated_at', 'active'];

  public function movies()
  {
    return $this->hasMany(Movie::class);
  }

  public function genres()
  {
    return $this->name;
  }
}
