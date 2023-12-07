<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vincular aprendices</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <style>
        body {
            font-family: 'figtree', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 24px;
            color: #333333;
            margin-bottom: 20px;
        }

        label {
            font-weight: 500;
            margin-bottom: 5px;
            display: block;
        }

        select,
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #cccccc;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        footer {
            text-align: center;
            background-color: #2d3748;
            color: #ffffff;
            padding: 1rem 0;
        }
    </style>
</head>
<body>

<x-banner />
<div class="min-h-screen bg-gray-100">
    <div class="page-content">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Vincular aprendices a cursos
                </h2>
            </x-slot>
            <div class="container">
                <form method="POST" action="{{ route('vincular.store') }}">
                    @csrf
                    <div>
                        <label for="iduser">Usuario</label>
                        <select name="iduser" id="iduser">
                            @foreach($agregar as $aprendiz)
                                <option value="{{ $aprendiz->id }}">{{ $aprendiz->name }} {{ $aprendiz->lastname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="Id_categoria">Categoria</label>
                        <select name="Id_categoria" id="Id_categoria">
                            @foreach($categorias as $curso)
                                <option value="{{ $curso->Id_categoria }}">{{ $curso->Nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" value="Vincular aprendiz">
                </form>
            </div>
        </x-app-layout>
    </div>
</div>

<footer>
    AutoClub Bochica © 2023 - Todos los derechos reservados
</footer>

@stack('modals')
@livewireScripts

</body>
</html>
