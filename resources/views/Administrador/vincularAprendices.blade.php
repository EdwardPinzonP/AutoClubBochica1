<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Vincular Aprendices</title>

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
                        Vincular aprendices a cursos
                    </h2>
                </x-slot>
                <form method="POST" action="{{ route('vincular.store') }}">
                    @csrf
                    <div style="margin-top: 15px">
                        <x-label for="iduser" value="{{ __('Usuario') }}" />
                        <select name="iduser" id="iduser">
                            @foreach($agregar as $aprendiz)
                                <option value="{{ $aprendiz->id }}">{{ $aprendiz->name }} {{ $aprendiz->lastname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="margin-top: 15px">
                        <x-label for="Id_categoria" value="{{ __('Categoria') }}" />
                        <select name="Id_categoria" id="Id_categoria">
                            @foreach($categorias as $curso)
                                <option value="{{ $curso->Id_categoria }}">{{ $curso->Nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="margin-top: 15px">
                        <x-button class="ml-4">
                            {{ __('Vincular aprendiz') }}
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
