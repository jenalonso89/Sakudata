<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Personajes</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="fondo">
            <h1>Personajes del clan {{ $clan->nombre }}</h1>
                <div class="folio">
                <ul>
                @foreach ($personajes as $personaje)
                    <div>
                    <li>
                        <a href="/clanes/personajes/{{ $personaje->id }}">
                            {{ $personaje->apellidos }} {{ $personaje->nombre }}
                        </a>
                    </li>
                    </div>
                @endforeach
                </ul>
                </div>
            <a href="/clanes">
            <button class="botones">Volver</button>
            </a>
            <a href="/clanes/{{$clan->id}}/personajes/crear">
            <button class="botones">Añadir</button>
            </a>
        </div>
    </body>
