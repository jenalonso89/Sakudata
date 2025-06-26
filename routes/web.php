<?php

use App\Http\Controllers\ClanController;
use App\Http\Controllers\PersonajesController;
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
//Rutas del controlador ClanController
//return "pagina index de los clanes";
Route::get("/clanes",[ClanController::class, 'index']);
//ruta al formulario de crear clanes
Route::get("/clanes/crear",[ClanController::class, 'create'] );
//ruta al post de crear clanes
Route::post("/clanes/crear",[ClanController::class,'insert']);
//ruta al formulario de editar clanes
Route::get("/clanes/editar/{id}",[ClanController::class, 'edit'] );
//ruta que edita
Route::post("/clanes/editar/{id}",[ClanController::class, 'upload'] );
//ruta al formulario de borrar clanes
Route::delete("/clanes/borrar/{id}",[ClanController::class, 'destroy'] );

//Rutas del controlador PersonajesController
//return "pagina index de los personajes por clan";
Route::get('/clanes/{id}/personajes', [PersonajesController::class, 'indexClan']);
//return de la información del personaje
Route::get("/clanes/personajes/{id}", [PersonajesController::class,'showinfo']);
//Return de un formulario de creación de personaje
Route::get("/clanes/{id}/personajes/crear", [PersonajesController::class,'showForm']);
//Post para crear un personaje
Route::post("/clanes/{id}/personajes/crear", [PersonajesController::class,'insert']);
//return formulario de edicion de personaje
Route::get("/clanes/personajes/{id}/editar/",[PersonajesController::class,'edit']);
//Post para editar el personaje
Route::post("/clanes/personajes/{id}/editar/",[PersonajesController::class,'upload']);
//ruta para borrar
Route::delete("/clanes/personajes/{id}/borrar/",[PersonajesController::class,'delete']);



