<?php
$space=" ";
use Illuminate\Support\Facades\Route;
#Manera básica, aburrida, nefasta...
Route::get('/', function () {
    return view('welcome');
});
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