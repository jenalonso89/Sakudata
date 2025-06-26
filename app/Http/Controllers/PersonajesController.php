<?php

namespace App\Http\Controllers;

use App\Models\Clan;
use Illuminate\Http\Request;
use App\Models\Personaje;

class PersonajesController extends Controller
{
    //
    public function indexClan($id){
        $clan = Clan::with('personajes')->findOrFail($id);
        $personajes = $clan->personajes;
        return view('personajes', compact('clan', 'personajes'));
    }
    public function showinfo($id){
        $personaje = Personaje::findOrFail($id);
        return view('infoPersonaje', compact('personaje'));
    }
    public function showForm($id){
        //Tiene que recibir el clan id para enviarlo y se pueda utilizar en la creacion del personaje
         $clan =Clan::findOrFail($id);
         return view('formPersonaje', compact('clan'));
    }
    public function insert(Request $request){
        $personaje = new Personaje();
        $personaje->nombre = $request->nombre;
        $personaje->apellidos = $request->apellidos;
        $personaje->edad = $request->edad;
        $personaje->imagen = $request->imagen;
        $personaje->combate = $request->combate;
        $personaje->arma = $request->arma;
        $personaje->estado =$request->estado;
        $personaje->clan_id = $request->clan_id;
        $personaje->save();
        return redirect('/clanes');
    }
    public function edit($id){
        $personaje = Personaje::findOrFail($id);
        return view('editPersonajes', compact('personaje'));
    }
    public function upload(Request $request, $id){
        $personaje = Personaje::findOrFail($id);
        $personaje->nombre =$request->nombre;
        $personaje->apellidos = $request->apellidos;
        $personaje->edad = $request->edad;
        $personaje->imagen = $request->imagen;
        $personaje->combate = $request->combate;
        $personaje->arma = $request->arma;
        $personaje->estado =$request->estado;
        $personaje->save();
        return redirect('/clanes');
    }
    public function delete($id){
         $personaje = Personaje::findOrFail($id);
         $personaje->delete();
         return redirect('/clanes');
    }
}
