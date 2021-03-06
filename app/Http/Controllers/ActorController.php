<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActorController extends Controller
{
    public function directory(){
      $actores = Actor::all();
      return view('actores', [
        'actores' => $actores
      ]);
    }

    public function mostrarActor($id)
    {
      $actor = Actor::find($id);

      return $actor;
    }
}
