<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Categoría B1</title>

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
                                <a href="{{ route('evidencias.categoriaB1') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Evidencias') }}</x-button></a>
                                <a href="{{ route('calificacionesB1') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Calificaciones') }}</x-button></a>
                                <a href="{{ route('compañerosB1') }}"><x-button style="width: 210px; margin-top: 10px; margin-block-end: 10px" class="ml-4">{{ __('Participantes') }}</x-button></a>
                            </div>
                            <div>
                                <form action="{{ route('responderB1.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label for="Id_evidencia">Seleccione la evidencia</label>
                                    <select name="Id_evidencia" id="Id_evidencia">
                                        @foreach($evidencias as $evi)
                                            <option value="{{ $evi->Id_evidencia }}">{{ $evi->descripcion }}</option>
                                        @endforeach
                                    </select>
                                    <label for="adjunto">Adjunte su evidencia</label>
                                    <input type="file" name="adjunto" id="adjunto">
                                    <button>Responder</button>
                                </form>
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
