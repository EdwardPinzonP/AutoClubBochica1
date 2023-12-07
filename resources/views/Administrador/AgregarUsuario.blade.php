<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Agregar Usuario</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <style>
            body {
                font-family: 'figtree', sans-serif;
                background-color: #f3f4f6;
                margin: 0;
                padding: 0;
            }
    
            .navbar {
                background-color: #333333;
                color: #ffffff;
                padding: 10px 0;
                text-align: center;
            }
    
            .navbar a {
                color: #ffffff;
                text-decoration: none;
                margin: 0 15px;
            }
    
            .container {
                max-width: 600px;
                margin: 20px auto;
                padding: 20px;
                background-color: #ffffff;
                box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }
    
            h1 {
                font-size: 24px;
                color: #333333;
                margin-bottom: 20px;
            }
    
            label {
                font-weight: 500;
                margin-bottom: 5px;
                display: block;
            }
    
            input[type="text"],
            input[type="email"],
            input[type="number"],
            input[type="date"],
            select,
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border-radius: 5px;
                border: 1px solid #cccccc;
            }
    
            select {
                appearance: none;
                -webkit-appearance: none;
                -moz-appearance: none;
                background: transparent url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5H7z"/></svg>') no-repeat right 10px center;
                background-size: 15px;
            }
    
            input[type="submit"] {
                background-color: #4caf50;
                color: #ffffff;
                border: none;
                padding: 12px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }
    
            input[type="submit"]:hover {
                background-color: #45a049;
            }
    
            footer {
            text-align: center;
            background-color: #2d3748;
            color: #ffffff;
            padding: 1rem 0;
        }
        </style>
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
                        Agregar Usuario
                    </h2>
                </x-slot>
                <div class="container">
                    <form method="POST" action="{{ route('usuarios.store') }}">
                        @csrf
                    
                        <label for="rol">Rol</label>
                        <select id="rol" name="rol">
                            <option value="Instructor">Instructor</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Aprendiz">Aprendiz</option>
                        </select>
                    
                        <div style="margin-top: 15px">
                            <div style="display: flex; gap: 15px;">
                                <div style="flex: 1;">
                                    <x-label for="name" value="{{ __('Nombre') }}" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                </div>
                                <div style="flex: 1;">
                                    <x-label for="lastname" value="{{ __('Apellido') }}" />
                                    <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
                                </div>
                            </div>
                        </div>
                    
                        <div style="margin-top: 15px">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        </div>
                    
                        <div style="display: flex; gap: 15px; margin-top: 15px;">
                            <div style="flex: 1;">
                                <x-label for="tipodocumento" value="{{ __('Tipo de documento') }}" />
                                <select id="tipodocumento" class="block mt-1 w-full rounded" type="text" name="tipodocumento">
                                    <option value="Cédula de ciudadanía" >Cédula de ciudadanía</option>
                                    <option value="Tarjeta de identidad" >Tarjeta de identidad</option>
                                    <option value="Cédula de extranjería">Cédula de extranjería</option>
                                </select> 
                            </div>
                            <div style="flex: 1;">
                                <x-label for="numerodocumento" value="{{ __('Número de documento') }}" />
                                <x-input id="numerodocumento" class="block mt-1 w-full" type="number" name="numerodocumento"/>
                            </div>
                        </div>
                    
                        <div style="display: flex; gap: 15px; margin-top: 15px;">
                            <div style="flex: 1;">
                                <x-label for="fechanacimiento" value="{{ __('Fecha de nacimiento') }}" />
                                <x-input id="fechanacimiento" class="block mt-1 w-full" type="date" name="fechanacimiento"/>
                            </div>
                            <div style="flex: 1;">
                                <x-label for="contacto" value="{{ __('Número de télefono') }}" />
                                <x-input id="contacto" class="block mt-1 w-full" type="number" name="contacto"/>
                            </div>
                        </div>
                    
                        <div style="display: flex; gap: 15px; margin-top: 15px;">
                            <div style="flex: 1;">
                                <x-label for="password" value="{{ __('Contraseña') }}" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>
                            <div style="flex: 1;">
                                <x-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                        </div>
                    
                        <input type="submit" value="Agregar Usuario">
                    </form>
                    
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
