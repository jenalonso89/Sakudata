<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sakudata</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <h1 class="titulo">Pagina Principal</h1>
        <p>Esta página esta dedicada a la recolección de datos del libro "La sangre de los cerezos" escrito por Daniel Astorga y Jenifer Alonso</p>
        <a href="/clanes">
        <button class="botones">Ver clanes</button>
        </a>
    </body>
