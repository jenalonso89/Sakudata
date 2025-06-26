<?php

namespace App\Http\Controllers;

use App\Models\Clan;
use Illuminate\Http\Request;

class ClanController extends Controller
{
    //
    function index(){
        $clanes = Clan::withCount('personajes')->get();
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
        $clan->descripcion = $request->descripcion;
        $clan->save();
        return redirect('/clanes');
    }
    function edit($id){
        $clan = Clan::findOrFail($id);
        return view('editClanes', compact('clan'));
    }
    function upload(Request $request, $id){
       $clan = Clan::findOrFail($id);
       $clan->nombre = $request->nombre;
       $clan->imagen = $request->imagen;
       $clan->residencia = $request->residencia;
       $clan->descripcion = $request->descripcion;
       $clan->save();
       return redirect('/clanes');
    }
    function destroy($id){
         $clan = Clan::findOrFail($id);
         $clan->delete();
         return redirect("/clanes");
    }
    
}
