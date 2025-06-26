<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Crear clan</title>
    </head>
    <body>
        <h1 class="titulo">Introducir Clan</h1>
        <form method="POST" action="/clanes/crear">
            @csrf
            <label>
            Nombre:
            </label>
            <input type="text" name="nombre">
            <label>
                Imagen:
            </label>
             <input type="text" name="imagen">
            
            <label>
                Residencia:
            </label>
             <input type="text" name="residencia">
            <label>
                Descripcion:
            </label>
            <input type="text" name="descripcion">
            <input type="submit">
        </form>
        <a href="/clanes"><button class="botones">Volver</button></a>
    </body>
