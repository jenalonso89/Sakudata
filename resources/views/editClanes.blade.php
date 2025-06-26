<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Editar clan</title>
    </head>
    <body>
        <h1 class="titulo">Editar Clan</h1>
        <form method="POST" action="/clanes/editar/{{$clan->id}}">
            @csrf
            <label>
                Nombre:
            </label>
            <input type="text" name="nombre" value="{{$clan->nombre}}">
            <label>
                Imagen:
            </label>
             <input type="text" name="imagen" value="{{$clan->imagen}}">
            
            <label>
                Residencia:
            </label>
             <input type="text" name="residencia" value="{{$clan->residencia}}">
            <label>
                Miembros:
            </label>
             <input type="number" name="miembros" value="{{$clan->miembros}}">
            <label>
                Descripcion:
            </label>
            <input type="text" name="descripcion" value="{{$clan->descripcion}}">
            <input type="submit">
        </form>
        <a href="/clanes"><button class="botones">Volver</button></a>
        <form action="/clanes/borrar/{{$clan->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Borrar clan</button>
        </form>

    </body>
