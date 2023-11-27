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
                <form method="POST" action="{{ route('usuarios.store') }}">
                    @csrf
                    <div class="mt-4">
                        <x-label for="rol" value="{{ __('Rol') }}" />
                        <select id="rol" class="block mt-1 w-full rounded" type="text" name="rol">
                            <option value="Instructor" >Instructor</option>
                            <option value="Administrador" >Administrador</option>
                            <option value="Administrador" >Aprendiz</option>
                        </select>                    
                    </div>

                    <div style="margin-top: 15px">
                        <x-label for="name" value="{{ __('Nombre') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
        
                    <div style="margin-top: 15px">
                        <x-label for="lastname" value="{{ __('Apellido') }}" />
                        <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
                    </div>
        
                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
        
                    <div class="mt-4">
                        <x-label for="tipodocumento" value="{{ __('Tipo de documento') }}" />
                        <select id="tipodocumento" class="block mt-1 w-full rounded" type="text" name="tipodocumento">
                            <option value="Cédula de ciudadanía" >Cédula de ciudadanía</option>
                            <option value="Tarjeta de identidad" >Tarjeta de identidad</option>
                            <option value="Cédula de extranjería">Cédula de extranjería</option>
                        </select>                    
                    </div>
        
                    <div class="mt-4">
                        <x-label for="numerodocumento" value="{{ __('Número de documento') }}" />
                        <x-input id="numerodocumento" class="block mt-1 w-full" type="number" name="numerodocumento"/>
                    </div>
        
                    <div class="mt-4">
                        <x-label for="fechanacimiento" value="{{ __('Fecha de nacimiento') }}" />
                        <x-input id="fechanacimiento" class="block mt-1 w-full" type="date" name="fechanacimiento"/>
                    </div>
        
                    <div class="mt-4">
                        <x-label for="contacto" value="{{ __('Número de télefono') }}" />
                        <x-input id="contacto" class="block mt-1 w-full" type="number" name="contacto"/>
                    </div>
        
                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Contraseña') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
        
                    <div class="mt-4">
                        <x-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <div style="margin-top: 15px">
                        <x-button class="ml-4">
                            {{ __('Agregar Usuario') }}
                        </x-button>
                    </div>
                </form>
            </x-app-layout>
        </div>

        @stack('modals')

        @livewireScripts
        <footer>
            AutoClub Bochica © 2023 - Todos los derechos reservados
        </footer>
    </body>
</html>
