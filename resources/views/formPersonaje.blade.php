<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Personajes</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <h1>Formulario de adición al clan</h1>
        <form method="POST" action="/clanes/{{$clan->id}}/personajes/crear" >
             @csrf
            <label>Nombre</label>
            <input type="text" name="nombre">
            <label>Apellidos</label>
            <input type="text" name="apellidos">
            <label>Edad</label>
            <input type="number" name="edad">
            <label>Imagen</label>
            <input type="text" name="imagen">
            <label>Estilo de combate</label>
            <input type="text" name="combate">
            <label>Arma</label>
            <input type="text" name="arma">
            <label>Estado</label>
            <input type="text" name="estado">
            <input type="hidden" name="clan_id" value="{{$clan->id}}">
            <input type="submit">
        </form>
        <a href="/clanes">
        <button class="botones">Volver</button>
        </a>
    </body>