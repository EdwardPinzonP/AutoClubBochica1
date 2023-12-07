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
        
        .btn-responder {
            display: inline-block;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-responder:hover {
            background-color: #0056b3;
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
                        Evidencias
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
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                                    @foreach($evidencias as $tarea) 
                                    <div class="bg-white overflow-hidden shadow-md rounded-lg">
                                        <div class="px-4 py-5 sm:p-6">
                                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $tarea->name }} {{ $tarea->lastname }}</h3>
                                            <p class="text-sm text-gray-600 mb-4">{{ $tarea->fechahora }}</p>
                                            <p class="text-sm text-gray-700">{{ $tarea->descripcion }}</p>
                                        </div>
                                        <div class="bg-gray-100 px-4 py-4 sm:px-6">
                                            <td><a href="{{ route('responderB1.create') }}" class="btn-responder">Responder</a></td>                                        </div>
                                        </div>
                                    @endforeach
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
