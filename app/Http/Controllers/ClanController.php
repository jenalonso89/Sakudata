<?php

namespace App\Http\Controllers;

use App\Models\Clan;
use Illuminate\Http\Request;

class ClanController extends Controller
{
    //
    function index(){
        $clanes = Clan::all();
        return view('clanes', compact('clanes'));
    }
    function create(){
        return view('formClanes');
    }
    function insert(Request $request){
        $clan = new Clan();
        $clan->nombre = $request->nombre;
        $clan->imagen = $request->imagen;
        $clan->residencia = $request->residencia;
        $clan->miembros = $request->miembros;
        $clan->descripcion = $request->descripcion;
        $clan->save();
        return redirect('/clanes');
    }
}
