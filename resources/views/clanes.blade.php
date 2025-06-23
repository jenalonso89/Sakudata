<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Clanes</title>
    </head>
    <body>
        <h1 class="titulo">Listado de Clanes</h1>
        <div>
            @foreach ($clanes as $clan)
                <figure>
                    <h3>{{$clan->nombre}}</h3>
                    <img class="avatar"src={{$clan->imagen}} alt={{$clan->nombre}}>
                    <figcaption>{{$clan->descripcion}}</figcaption>
                    <figcaption>Residencia:{{$clan->residencia}}</figcaption>
                    <figcaption>Miembros:{{$clan->miembros}}</figcaption>
                </figure>
            @endforeach
        </div>
        <a href="/clanes/crear"><button class="botones">Añadir clan</button></a>
        <a href="/"><button class="botones">Volver</button></a>
    </body>
