<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Categoría C1</title>

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
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f7fafc;
        }

        header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            text-align: center;
        }

        .page-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }

        .section-header {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333333;
            margin-bottom: 1.5rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f5f5f5;
        }

        td {
            background-color: #ffffff;
        }

        td a button {
            padding: 8px 16px;
            background-color: #e53e3e;
            color: #ffffff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        td a button:hover {
            background-color: #c53030;
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
                        Participantes
                    </h2>
                </x-slot>
            
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="info">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                <a href="{{ route('evidenciasC1') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Evidencias') }}</x-button></a>
                                <a href="{{ route('evidenciasC1.create') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Agregar evidencia') }}</x-button></a>
                                <a href="{{ route('evidenciasaprenc1') }}"><x-button style="width: 210px; margin-top: 10px;" class="ml-4">{{ __('Evidencias aprendices') }}</x-button></a>
                                <a href="{{ route('participantesC1') }}"><x-button style="width: 210px; margin-top: 10px; margin-block-end: 10px;" class="ml-4">{{ __('Participantes') }}</x-button></a>
                            </div>
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                <table>
                                    <tr style="text-align: center">
                                        <td>Nombre</td>
                                        <td>Apellido</td>
                                        <td>Correo</td>
                                        <td>Tipo de documento</td>
                                        <td>Numero de documento</td>
                                        <td>Fecha de nacimiento</td>
                                        <td>Contacto</td>
                                    </tr>
                                    @foreach($aprendices as $apren)
                                        <tr>
                                            <td>{{ $apren->name }}</td>
                                            <td>{{ $apren->lastname }}</td>
                                            <td>{{ $apren->email }}</td>
                                            <td>{{ $apren->tipodocumento }}</td>
                                            <td>{{ $apren->numerodocumento }}</td>
                                            <td>{{ $apren->fechanacimiento }}</td>
                                            <td>{{ $apren->contacto }}</td>
                                        </tr>
                                    @endforeach
                                </table>
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