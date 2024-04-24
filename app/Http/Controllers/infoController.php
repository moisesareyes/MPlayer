<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class infoController extends Controller
{
    public function infodex(){
        return view('info.infoIndex');
    }
    public function mplayer(){
        return view('info.mplayer');
    }
    public function disclaimer(){
        return view('info.disclaimer');
    }
    public function userinfo($user=null){
        if($user==null){
            return("Usuario no disponible");
        }
        else{
            return view('info.user',compact('user'));
        }
    }
}
