<?php

namespace App\Http\Controllers;
use App\Models\artists;
use App\Models\imagenes;
use Illuminate\Http\Request;
use App\Models\redirects;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\PseudoTypes\True_;

class artistaController extends Controller
{
    public function test(){
        return view('artists');
    }
    public function create(){
        return view('createArtist');
    }
    public function modric(){
        return view('puedepasar');
    }
    public function recep2(Request $req){
        $sqlrt=artists::where('id',$req->superid)->first();
        $nwprimg=$sqlrt['name'].'a-'.time().'.'.$req->file('file')->extension();
        $req->file('file')->move(public_path('public'),$nwprimg);
        $routeimg='public/'.$nwprimg;
        $sqlimg= new imagenes();
        $sqlimg->dir=$routeimg;
        $sqlimg->principal=0;
        $sqlimg->artists_id=$sqlrt['id'];
        $sqlimg->save();
    }
    public function recep(Request $request){
        
        $sqlrt=artists::where('name',$request->name)->first();
        if (isset($sqlrt)){
            return view('createArtistStep2',compact('sqlrt'));
        }
        else{
            $sqlrt=new artists;
            $sqlrt->name=$request->name;
            $sqlrt->bio=$request->message;
            $sqlrt->save();
            $nwprimg=$request->name.'-'.time().'.'.$request->file('primg')->extension();
            $request->file('primg')->move(public_path('public'),$nwprimg);
            $routeimg='public/'.$nwprimg;
            $sqlimg= new imagenes();
            $sqlimg->dir=$routeimg;
            $sqlimg->principal=1;
            $sqlrt->imagenes()->save($sqlimg);
            foreach($request->link as $requiem=>$jogo){
                $sqlr2= new redirects();
                $sqlr2->tittle=$request->tittle[$requiem];
                $sqlr2->direccion=$request->link[$requiem];
                $sqlrt->redirects()->save($sqlr2);
            };
            return view('createArtistStep2',compact('sqlrt'));
        }
    }
    public function testing($selec){
        $new=artists::where('name',$selec)->first();
        if (isset($new)){
            $newimg=$new->imagenes;
            $newredirect=$new->redirects;
            return view('testing',compact('new','newimg','newredirect'));
        }
        else{
            return redirect('/404');
        }
        
        #return $new;
    }
}