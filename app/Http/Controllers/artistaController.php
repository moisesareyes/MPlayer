<?php

namespace App\Http\Controllers;
use App\Models\artists;
use App\Models\imagenes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class artistaController extends Controller
{
    public function test(){
        return view('artists');
    }
    public function create(){
        return view('createArtist');
    }
    public function recep(Request $request){
        $sqlrt=new artists;
        $artistswheresearch=artists::where('name',$request->name)->first();
        if (isset($artistswheresearch)){
            return redirect('/');
        }
        else{
            $sqlrt->name=$request->name;
            $sqlrt->bio=$request->message;
            $sqlrt->save();
            $sqlimg=new imagenes;
            $nwprimg=$request->name.'-'.time().'.'.$request->file('primg')->extension();
            $request->file('primg')->move(public_path('public'),$nwprimg);
            $newsearch=artists::where('name',$request->name)->first();
            $newroute='public/'.$nwprimg;
            $sqlimg->dir=$newroute;
            $sqlimg->artists_id=$newsearch->id;
            $sqlimg->principal=1;
            $sqlimg->save();
            return $request;
        }
    }
}