<?php

use App\Http\Controllers\ClanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return "pagina principal,aquí se mostrara una vista con informacion general y un boton de mostrar clanes";
     return view('init');
});
//return "pagina index de los clanes";
Route::get("/clanes",[ClanController::class, 'index']);
//ruta al formulario de crear clanes
Route::get("/clanes/crear",[ClanController::class, 'create'] );
//ruta al post de crear clanes
Route::post("/clanes/crear",[ClanController::class,'insert']);




Route::get("/clanes/personajes", function(){
    return "pagina index de los personajes";
});
Route::get("/clanes/personajes/{id}", function(){
    return "pagina informativa del personaje";
});
Route::get("/clanes/personajes/crear", function(){
    return "pagina formulario creacion personaje";
});



Route::get("/clanes/personajes/editar", function(){
    return "pagina formulario edicion personaje";
});
Route::get("/clanes/editar", function(){
    return "pagina formulario edicion clan";
});

