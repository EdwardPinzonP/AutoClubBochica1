<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Gestionar participantes</title>

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
</head>
<body>

<x-banner />

<div class="page-content">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="section-header">
                Gestionar participantes
            </h2>
        </x-slot>

        <!-- Aprendices Table -->
        <div>
            <h3 class="section-header">Aprendices</h3>
            <table>
                <!-- Table header -->
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Tipo documento</th>
                    <th>Número documento</th>
                    <th>Contacto</th>
                    <th>Acción</th>
                </tr>
                <!-- Loop through $aprendices -->
                @foreach($aprendices as $apren)
                <tr>
                    <td>{{ $apren->name }}</td>
                    <td>{{ $apren->lastname }}</td>
                    <td>{{ $apren->email }}</td>
                    <td>{{ $apren->tipodocumento }}</td>
                    <td>{{ $apren->numerodocumento }}</td>
                    <td>{{ $apren->contacto }}</td>
                    <td><a href="{{ route('categoriaA2.destroy' , $apren->Id_aprendiz) }}" onclick="return confirm('¿Está seguro de desvincular este usuario de la categoría?')"><button>Eliminar del curso</button></a></td>
                </tr>
                @endforeach
            </table>
        </div>

        <!-- Instructores Table -->
        <div>
            <h3 class="section-header">Instructores</h3>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Tipo documento</th>
                    <th>Número documento</th>
                    <th>Contacto</th>
                    <th>Acción</th>
                </tr>
                <!-- Loop through $instructores -->
                @foreach($instructores as $profe)
                <tr>
                    <td>{{ $profe->name }}</td>
                    <td>{{ $profe->lastname }}</td>
                    <td>{{ $profe->email }}</td>
                    <td>{{ $profe->tipodocumento }}</td>
                    <td>{{ $profe->numerodocumento }}</td>
                    <td>{{ $profe->contacto }}</td>
                    <td><a href="{{ route('categoriaA2.destroyIns' , $profe->Id_instructor) }}" onclick="return confirm('¿Está seguro de desvincular este usuario de la categoría A2?')"><button>Eliminar del curso</button></a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </x-app-layout>
</div>

<footer>
    AutoClub Bochica © 2023 - Todos los derechos reservados
</footer>

@stack('modals')
@livewireScripts

</body>
</html>
