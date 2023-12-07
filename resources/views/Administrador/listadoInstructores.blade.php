<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Listado de instructores</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <style>
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

        form {
            margin-bottom: 1rem;
        }

        input[type="text"] {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button[type="submit"] {
            padding: 8px 16px;
            background-color: #4299e1;
            color: #ffffff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button[type="submit"]:hover {
            background-color: #3182ce;
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
</head>
<body>

<x-banner />
<div class="min-h-screen bg-gray-100">
    <div class="page-content">
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
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
                                <th>Tipo de documento</th>
                                <th>Número de documento</th>
                                <th>Contacto</th>
                                <th>Categoría</th>
                                <th>Acción</th>
                            </tr>
                            <!-- Loop through $instructores -->
                            @foreach($instructores as $prof)
                            <tr style="text-align: center;">
                                <td>{{ $prof->user->name }}</td>
                                <td>{{ $prof->user->lastname }}</td>
                                <td>{{ $prof->user->email }}</td>
                                <td>{{ $prof->user->tipodocumento }}</td>
                                <td>{{ $prof->user->numerodocumento }}</td>
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
</div>

<footer>
    AutoClub Bochica © 2023 - Todos los derechos reservados
</footer>

@stack('modals')
@livewireScripts

</body>
</html>
