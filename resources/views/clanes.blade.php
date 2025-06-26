<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Clanes</title>
    </head>
    <body>
        <div class="desplazamiento">
             <a href="/clanes/crear"><button class="botones">Añadir clan</button></a>
             <a href="/"><button class="botones">Volver</button></a>
        </div>
        <header class="listado-clanes">
            <h1>Listado de Clanes</h1>
        </header>
        <div class="folio">
            @foreach ($clanes as $clan)
                <figure class="tarjeta">
                    <h3>{{$clan->nombre}}</h3>
                    <a href="/clanes/{{ $clan->id }}/personajes">
                    <img class="avatar" src="{{ $clan->imagen }}" alt="{{ $clan->nombre }}">
                    </a>
                    <figcaption>{{$clan->descripcion}}</figcaption>
                    <figcaption>Residencia:{{$clan->residencia}}</figcaption>
                    <figcaption><Miembros:>{{$clan->personajes_count}}</Miembros:></figcaption>
                    <a href="/clanes/editar/{{ $clan->id }}"><button class="boton-tarjeta">Editar</button></a>
                </figure>   
            @endforeach
        </div>
       
    </body>
