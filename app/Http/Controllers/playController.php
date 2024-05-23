<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\album;
use App\Models\canciones;

class playController extends Controller
{
    public function play($id){
        $album= album::find($id);
        $songs=$album->canciones;
        return view('puedepasar',compact('album','songs'));
    }
}
