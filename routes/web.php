<?php

use App\Http\Controllers\albController;
use App\Models\artists;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\songsController;
use App\Http\Controllers\infoController;
use App\Http\Controllers\artistaController;
use App\Http\Controllers\userController;
use App\Http\Controllers\playController;
#Manera básica, aburrida, nefasta...
#\|/|\|/\|/\|/\|/ Route::get('/', function () {
#\|/|\|/\|/\|/\|/    return view('welcome');
#\|/|\|/\|/\|/\|/ });
#Comentada porque toca hacerlo con objetos... Importa tu namespace y duro (Ver abajo)...
Route::get('/welcome',function(){
    return "What can I say except, You're Welcome";
});
#La manera pro, buena practica, aprendela y usala...
Route::get('/canciones/{song}',function($song){
    return "De tenerla, aquí se mostrará la letra de {$song}";
});
Route::get('/artistas',function(){
    return "Repositorio de Artistas";
});
#Otra forma, to' guapa, es agregar otra variable y distinguir si está en juego o no
Route::get('/artistas/{nombre}/{category?}',function($nombre,$category=null){
    if ($category==null){
        return "Perfil completo de {$nombre}";
    }
    else{
        return "{$category} de {$nombre}";
    }
});
#Recuerda siempre tener orden descendente en respecto a lo que quieres que se muestre
#usar namespace
#\|/|\|/\|/\|/\|/ php artisan make:controller nombre
# Se hace a través de comandos
#Diferentes ejemplos de este tipo de enrutamiento, con variables, normal, etc, solo una funcion
Route::get('/songs',[songsController::class,'songsIndex']);
Route::get('/songs/top',[songsController::class,'top']);
Route::get('/songs/hot',[songsController::class,'hot']);
Route::get('/songs/{artist}',[songsController::class,'artistSong']);
Route::get('/',indexController::class)->name('indx');
Route::get('/404',[indexController::class,'error'])->name('404');
Route::get('/artist',[artistaController::class,'test']);
Route::get('/artist/create',[artistaController::class,'create'])->name('create');
Route::post('/artist/create/2', [artistaController::class,'create2']);
Route::get('/artist/testing/{artista}',[artistaController::class,'testing']);
Route::post('/artist/edit',[artistaController::class,'editArtist'])->name('editArtist');
Route::post('/artist/r/edit',[artistaController::class,'recepEditA'])->name('recepEditA');
Route::post('/artist/recep', [artistaController::class,'recep'])->name('recepArtist');
Route::post('/artist/receplinks', [artistaController::class,'recep2'])->name('/recep2');
Route::get('/alb/create',[albController::class,'create']);
Route::post('/alb/reg',[albController::class,'reg'])->name('recepAlb');
Route::get('/info',[infoController::class,'infodex']);
Route::get('/info/mplayer',[infoController::class,'mplayer']);
Route::get('/info/disclaimer',[infoController::class,'disclaimer']);
Route::get('/info/user/{user}',[infoController::class,'userinfo']);
Route::get('/login',[userController::class,'login'])->name('login');
Route::post('/login/reg',[userController::class,'reg'])->name('recepReg');
Route::post('/login/log',[userController::class,'log'])->name('recepLog');
Route::get('/play/{id}',[playController::class,'play']);
Route::get('/pl/create',[playController::class,'playlist']);
Route::post('/pl/createPlaylist',[playController::class,'createPlaylist'])->name('createPL');
Route::get('/testing',function(){ 
    $artists= new artists;
    $artistswheresearch=artists::where('name','Promedio')->first();
    return $artistswheresearch->id;
    /* INSERT
    $artists->name="Promedio";
    $artists->bio="NAcido en 101010";
    $artists->imgs="*ruta*";
    $artists->redes="link tras link";
    $artists->save();
    */
    /* SELECT
    $artistssearch=artists::find(1);
    return $artistssearch;
    */
    /* WHERE + UPDATE
    $artistswheresearch=artists::where('name','Promedio')->first();
    $artistswheresearch->bio="no nacio";
    $artistswheresearch->save();
    return $artistswheresearch;
    */
    /* SELECT * AND SELECT * WHERE AND SELECT ORDER BY
    $allseatch=artists::all();
    return $allseatch;
    $allsearchwhere=artists::where('id','>=','2')->select('bio')->get();
    return $allsearchwhere;
    $allsearchorder=artists::orderby('id','desc')->get();
    return $allsearchorder;
    */
    /* DELETE
    $artistsend=artists::find(3);
    $artistsend->delete();
    return "Eliminados";
    */
    /* Relacion entre tablas
    php artisan make:model adress -m (-m opcional(sirve para hacer una migración instantanea))
    */

});