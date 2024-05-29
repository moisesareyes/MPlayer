<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\album;
use App\Models\canciones;
use App\Models\playlist;
use App\Models\playlist_canciones;
use App\Models\User;
class playController extends Controller
{
    public function play($id){
        $album= album::find($id);
        $songs=$album->canciones;
        return view('puedepasar',compact('album','songs'));
    }
    public function playlist(){
        return view('createPlaylist');
    }
    public function createPlaylist(Request $req){
        
        if ($req->supercover){
            $nwprimg=$req->name.'pl-'.time().'.'.$req->file('primg')->extension();
            $req->file('primg')->move(public_path('public'),$nwprimg);
            $routeimg='public/'.$nwprimg;
            $sqlreg= new playlist();
            $sqlreg->title=$req->supertitle;
            $sqlreg->desp=$req->superdescp;
            $sqlreg->cover=$routeimg;
            $sqlreg->user_id=1;
            $sqlreg->save();
        }
        else{
            $sqlreg= new playlist();
            $sqlreg->title=$req->supertitle;
            $sqlreg->desp=$req->superdescp;
            $sqlreg->cover='public/MAKI-1716494538.png';
            $sqlreg->user_id=1;
            $sqlreg->save();
        }
        return $req;
    }
}
