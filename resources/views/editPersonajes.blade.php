<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edicion</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <h1>Editar personaje</h1>
            <form method="POST" action="/clanes/personajes/{{$personaje->id}}/editar/">
             @csrf
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{$personaje->nombre}}">
            <label>Apellidos</label>
            <input type="text" name="apellidos" value="{{$personaje->apellidos}}">
            <label>Edad</label>
            <input type="number" name="edad" value="{{$personaje->edad}}">
            <label>Imagen</label>
            <input type="text" name="imagen" value="{{$personaje->imagen}}">
            <label>Estilo de combate</label>
            <input type="text" name="combate" value="{{$personaje->combate}}">
            <label>Arma</label>
            <input type="text" name="arma" value="{{$personaje->arma}}">
            <label>Estado</label>
            <input type="text" name="estado" value="{{$personaje->estado}}">
            <input type="submit">
        </form>
        <a href="/clanes">
        <button class="botones">Volver</button>
        </a>
    </body>