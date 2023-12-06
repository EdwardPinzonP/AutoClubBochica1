<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Categoría A2</title>

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
                        Agregar evidencia
                    </h2>
                </x-slot>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="info">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                <a href="{{ route('evidenciasA2') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Evidencias') }}</x-button></a>
                                <a href="{{ route('evidenciasA2.create') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Agregar evidencia') }}</x-button></a>
                                <a href="{{ route('evidenciasaprena2') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Evidencias aprendices') }}</x-button></a>
                                <a href="{{ route('participantesA2') }}"><x-button style="width: 210px; margin-top: 10px; margin-block-end: 10px;" class="ml-4">{{ __('Participantes') }}</x-button></a>
                            </div>
                            <div style="width: 50%; margin: 0 auto;">
                                <form method="POST" action="{{ route('evidenciasA2.store') }}" style="border: 1px solid #ddd; padding: 20px; border-radius: 5px;">
                                    @csrf
                                    <label for="descripcion" style="display: block; margin-bottom: 10px;">Descripción</label>
                                    <input type="text" name="descripcion" id="descripcion" style="padding: 8px; width: 100%; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 3px;">
                                    <div style="text-align: center;">
                                        <button type="submit" style="padding: 8px 16px; background-color: #008CBA; color: white; border: none; border-radius: 3px; cursor: pointer;">Añadir evidencia</button>
                                    </div>
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
