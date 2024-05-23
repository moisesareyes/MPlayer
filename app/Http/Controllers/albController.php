<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artists;
use App\Models\album;
use App\Models\canciones;
class albController extends Controller
{
    public function create(){
        return view('albCreate');
    }
    public function reg(Request $req){
        #verificacion
        $req->validate([
            'supercover' => 'dimensions:width=3000,height=3000',
        ]);
        #album reg
        $artist=artists::find($req->superid);
        $nwcover=$artist['name'].'-'.time().'.'.$req->file('supercover')->extension();
        $req->file('supercover')->move(public_path('public'),$nwcover);
        $routeimg='public/'.$nwcover;
        $alb= new album();
        $alb->titulo=$req->supertt;
        $alb->type=$req->supertype;
        $alb->release=$req->superelease;
        $alb->album_img=$routeimg;
        $artist->album()->save($alb);
        #song reg
        foreach($req->supersongtitle as $requiem=>$jogo){
            $superaudio=$artist['name'].'a-'.time().'.'.$req->file('supersong')[$requiem]->getClientOriginalName().'.'.$req->file('supersong')[$requiem]->extension();
            $req->file('supersong')[$requiem]->move(public_path('music'),$superaudio);
            $routeaudio='music/'.$superaudio;
            $sqlAudio= new canciones();
            $sqlAudio->nameSong=$req->supersongtitle[$requiem];
            $sqlAudio->release=$req->superelease;
            $sqlAudio->audio_dir=$routeaudio;
            $alb->canciones()->save($sqlAudio);
        };
        return $req;
    }
    public function neymar(){
        return view('puedepasar');
    }
}