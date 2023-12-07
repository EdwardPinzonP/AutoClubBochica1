<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Categoría C2</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <style>
        .info{
            display: grid;
            grid-template-columns: 20% 80%;
            justify-content: center;
            align-items: center;
        }

        .custom-form {
            width: 600px;
            padding: 10px;
            border-radius: 5px;
            margin: 0 auto;
            background-color: white;
        }

        .custom-form label {
            display: block;
            margin-bottom: 5px;
        }

        .custom-form select,
        .custom-form input[type="file"],
        .custom-form button {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        .custom-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        .custom-form button:hover {
            background-color: #113c69;
        }

        footer {
            text-align: center;
            background-color: #2d3748;
            color: #ffffff;
            padding: 1rem 0;
        }
    </style>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Responder evidencia
                    </h2>
                </x-slot>
            
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="info">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                <a href="{{ route('evidencias.categoriaC2') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Evidencias') }}</x-button></a>
                                <a href="{{ route('calificacionesC2') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Calificaciones') }}</x-button></a>
                                <a href="{{ route('compañerosC2') }}"><x-button style="width: 210px; margin-top: 10px; margin-block-end: 10px" class="ml-4">{{ __('Participantes') }}</x-button></a>
                            </div>
                            <div class="custom-form">
                                <div class="container">
                                    <form action="{{ route('responderC2.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Id_evidencia">Seleccione la evidencia</label>
                                            <select class="form-control" name="Id_evidencia" id="Id_evidencia">
                                                @foreach($evidencias as $evi)
                                                <option value="{{ $evi->Id_evidencia }}">{{ $evi->descripcion }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="adjunto">Adjunte su evidencia</label>
                                            <input type="file" class="form-control-file" name="adjunto" id="adjunto">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Responder</button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </x-app-layout>
        </div>

        @stack('modals')

        @livewireScripts
        <footer>
            AutoClub Bochica © 2023 - Todos los derechos reservados
        </footer>
    </body>
</html>
