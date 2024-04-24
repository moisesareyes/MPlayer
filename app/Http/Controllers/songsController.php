<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class songsController extends Controller
{
    public function songsIndex(){
        return "Index para canciones";
    }
    public function top(){
        return "Top de canciones";
    }
    public function hot(){
        return "Canciones del momento";
    }
    public function artistSong($artist=null){
        return "Aqui se muestra las canciones de {$artist}";
    }
}
