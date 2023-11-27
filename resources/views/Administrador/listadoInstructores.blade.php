<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Listado de instructores</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
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
                        Instructores
                    </h2>
                </x-slot>
                <form action="{{ route('buscarInstructor') }}" method="GET">
                    <input type="text" name="numero_documento" placeholder="Buscar por número de documento">
                    <button type="submit">Buscar</button>
                </form>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <table>
                                <tr style="text-align: center">
                                    <td>Nombre</td>
                                    <td>Apellido</td>
                                    <td>Correo</td>
                                    <td>Tipo de documento</td>
                                    <td>Numero de documento</td>
                                    <td>Fecha de nacimiento</td>
                                    <td>Contacto</td>
                                    <td>Categoría</td>
                                    <td>Acción</td>
                                </tr>
                                @foreach($instructores as $prof)
                                    <tr style="text-align: center;">
                                        <td>{{ $prof->user->name }}</td>
                                        <td>{{ $prof->user->lastname }}</td>
                                        <td>{{ $prof->user->email }}</td>
                                        <td>{{ $prof->user->tipodocumento }}</td>
                                        <td>{{ $prof->user->numerodocumento }}</td>
                                        <td>{{ $prof->user->fechanacimiento }}</td>
                                        <td>{{ $prof->user->contacto }}</td>
                                        <td>{{ $prof->categoria->Nombre }}</td>
                                        <td><a href="{{ route('instructores.edit', $prof->user->id) }}"><button>Editar</button></a></td>
                                    </tr>
                                @endforeach
                            </table>
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
