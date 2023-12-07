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
                        Calificar
                    </h2>
                </x-slot>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="info">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                <a href="{{ route('evidenciasB1') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Evidencias') }}</x-button></a>
                                <a href="{{ route('evidenciasB1.create') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Agregar evidencia') }}</x-button></a>
                                <a href="{{ route('evidenciasaprenb1') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Evidencias aprendices') }}</x-button></a>
                                <a href="{{ route('participantesB1') }}"><x-button style="width: 210px; margin-top: 10px; margin-block-end: 10px;" class="ml-4">{{ __('Participantes') }}</x-button></a>
                            </div>
                            <div class="max-w-md mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                <form method="PUT" action="{{ route('guardaraprenb1', $evidencias->Id_evidenciaR) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="nota" class="block text-gray-700 text-sm font-bold mb-2">Nota</label>
                                        <div class="relative">
                                            <select name="nota" id="nota" class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500">
                                                <option value="A">A</option>
                                                <option value="R">R</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" style="background-color: #00182c">Calificar</button>
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
