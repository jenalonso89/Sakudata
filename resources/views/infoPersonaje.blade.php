<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Informacion de personaje</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="tarjeta-personaje"> 
            <img src="{{$personaje->imagen}}">
            <h1>{{$personaje->apellido}}{{$personaje->nombre}}</h1>
            <p>Edad:{{$personaje->edad}}</p>
            <p>Arma:{{$personaje->arma}}</p>
            <p>Estilo de combate:{{$personaje->combate}}</p>
            <p>Estado:{{$personaje->estado}}</p>
            <div class="botones-tarjeta">
                <a href="/clanes/personajes/{{$personaje->id}}/editar/">
                <button>Editar</button>
                </a>
                <form method="POST" action="/clanes/personajes/{{$personaje->id}}/borrar/">
                    @csrf
                    @method('DELETE')
                    <button>Borrar</button>
                </form>   
                <a href="/clanes">
            </div>
         </div>   
        <button class="botones">Volver</button>
        </a>
    </body>
