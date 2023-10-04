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
        <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="cursos">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25   " fill="currentColor" class="bi bi-journal-album" viewBox="0 0 16 16">
                    <path d="M5.5 4a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5h-5zm1 7a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
            </div>
            <div>
                <h3 style="font-family: cursive; font-size: 20px">Cursos</h3>
            </div>
        </div>
        <div class="conta">
            @php
                $aprendizId = Auth::user()->id;
                $cursoDeConduccion = DB::table('aprendices')
                ->join('categorias', 'aprendices.Id_categoria', '=', 'categorias.Id_categoria')
                ->select('categorias.Nombre')
                ->where('aprendices.iduser', $aprendizId)
                ->get();
            @endphp
            @if ($cursoDeConduccion)
            @foreach ($cursoDeConduccion as $categoria)
            @csrf
            <a href="">
                <div class="curso">
                    <div><h2>{{ $categoria->Nombre}}</h2></div>
                    @if($categoria->Nombre=="Categoría A2")
                        <div><img class="ca2" src="{{ asset('img/categoriaa2.png') }}" alt=""></div>
                    @elseif($categoria->Nombre=="Categoría B1")
                        <div><img class="cb1" src="{{ asset('img/categoriab1.png') }}" alt=""></div>
                    @elseif($categoria->Nombre=="Categoría C1")
                        <div><img class="cc1" src="{{ asset('img/categoriac1.png') }}" alt=""></div>
                    @elseif($categoria->Nombre=="Categoría C2")
                        <div><img class="cc2" src="{{ asset('img/categoriac2.png') }}" alt=""></div>
                    @endif
                </div>
            </a>
            @endforeach
        
            @else
                <div class="sin-curso">
                    <p>No estás inscrito en ningún curso de conducción.</p>
                </div>
            @endif
        </div>
        <footer>
            AutoClub Bochica © 2023 - Todos los derechos reservados
        </footer>
    </body>
</html>
