<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

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
                        Categoría C2
                    </h2>
                </x-slot>
            
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <div>Aprendices</div>
                            <table>
                                <tr style="text-align: center">
                                    <td>Nombre</td>
                                    <td>Apellido</td>
                                    <td>Correo</td>
                                    <td>Tipo de documento</td>
                                    <td>Numero de documento</td>
                                    <td>Fecha de nacimiento</td>
                                    <td>Contacto</td>
                                    <td>Acción</td>
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
                                        <td><a href="{{ route('categoriaC2.destroy' , $apren->Id_aprendiz) }}" onclick="return confirm('Esta seguro de desvincular este aprendiz de la categoría C2?')"><button>Eliminar del curso</button></a></td>
                                    </tr>
                                @endforeach
                            </table>
                            <div>Instructores</div>
                            <table>
                                <tr style="text-align: center">
                                    <td>Nombre</td>
                                    <td>Apellido</td>
                                    <td>Correo</td>
                                    <td>Tipo de documento</td>
                                    <td>Numero de documento</td>
                                    <td>Fecha de nacimiento</td>
                                    <td>Contacto</td>
                                    <td>Acción</td>
                                </tr>
                                @foreach($instructores as $profe)
                                    <tr>
                                        <td>{{ $profe->name }}</td>
                                        <td>{{ $profe->lastname }}</td>
                                        <td>{{ $profe->email }}</td>
                                        <td>{{ $profe->tipodocumento }}</td>
                                        <td>{{ $profe->numerodocumento }}</td>
                                        <td>{{ $profe->fechanacimiento }}</td>
                                        <td>{{ $profe->contacto }}</td>
                                        <td><a href="{{ route('categoriaC2.destroyIns' , $profe->Id_instructor) }}" onclick="return confirm('Esta seguro de desvincular este usuario de la categoría C2?')"><button>Eliminar del curso</button></a></td>
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
