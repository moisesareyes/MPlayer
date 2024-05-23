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
        $nwprimg=$sqlrt['name'].'a-'.time().'.'.$req->file('file')->getClientOriginalName().'.'.$req->file('file')->extension();
        $req->file('file')->move(public_path('public'),$nwprimg);
        $routeimg='public/'.$nwprimg;
        $sqlimg= new imagenes();
        $sqlimg->dir=$routeimg;
        $sqlimg->principal=0;
        $sqlrt->imagenes()->save($sqlimg);
    }
    public function recep(Request $request){
        $request->validate([
            'primg' => 'dimensions:width=3000,height=3000',
        ]);
        $sqlrt=artists::where('name',$request->name)->first();
        if (isset($sqlrt)){
            return view('createArtistStep2',compact('sqlrt'));
        }
        else{
            $sqlrt=new artists;
            $sqlrt->name=$request->name;
            $sqlrt->bio=$request->message;
            $sqlrt->users_id=1;
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
    }
    public function editArtist(Request $req){
        $new=artists::where('id',$req->superid)->first();
        $newimg=$new->imagenes;
        $newredirect=$new->redirects;
        return view('editArtist',compact('new','newimg','newredirect'));
    }
    public function recepEditA(Request $req){
        $oneforall=artists::where('id',$req->valor)->first();
        switch ($req->identificador) {
            case 1:
                # Editar Información general
                $artistEditInfo=artists::where('id',$req->valor)->first();
                $artistEditInfo->name=$req->supername;
                $artistEditInfo->bio=$req->superbio;
                $artistEditInfo->save();
                break;
            case 2:
                # Eliminar/Editar Links
                if ($req->btn==0){
                    $linkend=redirects::find($req->redirvalue);
                    $linkend->delete();
                }
                elseif($req->btn==1){
                    $linkedit=redirects::where('id',$req->redirvalue)->first();
                    $linkedit->tittle=$req->supertittle;
                    $linkedit->direccion=$req->superlink;
                    $oneforall->redirects()->save($linkedit);
                }
                break;
            case 3:
                # Agregar Nuevos Links
                $newlink=new redirects();
                $newlink->tittle=$req->supertittle;
                $newlink->direccion=$req->superlink;
                $oneforall->redirects()->save($newlink);
                break;
            case 4:
                # Cambiar imagen principal
                $nwprimg=$oneforall['name'].'-'.time().'.'.$req->file('primg')->extension();
                $req->file('primg')->move(public_path('public'),$nwprimg);
                $routeimg='public/'.$nwprimg;
                $imgedit=imagenes::where('id',$req->imgvalue)->first();
                $imgedit->dir=$routeimg;
                $imgedit->cat='artist';
                $imgedit->principal=1;
                $oneforall->imagenes()->save($imgedit);
                break;
            case 5:
                #Eliminar imagenes
                $deleteimg=imagenes::find($req->imgvalue);
                $deleteimg->delete();
                break;
            default:
                echo 'mueranse todos hijos de puta';
                break;
        }
        $new=artists::where('id',$oneforall->id)->first();
        $newimg=$new->imagenes;
        $newredirect=$new->redirects;
        return view('editArtist',compact('new','newimg','newredirect'));
    }
}