<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Inicio || Instructor</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <style>
        .cursos {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .cursos div {
            margin-right: 10px;
        }

        .cursos svg {
            width: 25px;
            height: 25px;
            fill: currentColor;
        }

        .cursos h3 {
            font-family: 'figtree', sans-serif;
            font-size: 20px;
        }

        .conta {
            display: grid;
            grid-template-columns: 20% 20% 20% 20%;
            gap: 20px;
            margin: 0 auto;
            width: 95%;
            text-align: center;
            justify-content: center;
        }

        .curso {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            height: 200px;
        }

        .curso h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .curso p {
            font-size: 14px;
            color: #666;
        }

        .ca2 {
            height: 100px;
            width: 100px;
            margin: 0 auto;
        }

        .curso:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            cursor: pointer;
        }

        .sin-curso {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        .sin-curso p {
            font-size: 16px;
            font-weight: bold;
        }

        footer {
            margin-top: 10%;
            color: #666;
            padding: 10px;
            text-align: center;
        }
        </style>
        <div class="cursos">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25   " fill="currentColor" class="bi bi-journal-album" viewBox="0 0 16 16">
                    <path d="M5.5 4a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5h-5zm1 7a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
            </div>
            <div>
                <h3 style="font-family: Arial; font-size: 20px">Cursos</h3>
            </div>
        </div>
        <div class="conta">
            @php
                $aprendizId = Auth::user()->id;
                $cursoDeConduccion = DB::table('instructores')
                ->join('categorias', 'instructores.Id_categoria', '=', 'categorias.Id_categoria')
                ->select('categorias.Nombre')
                ->where('instructores.iduser', $aprendizId)
                ->get();
            @endphp
            @if ($cursoDeConduccion)
            @foreach ($cursoDeConduccion as $categoria)
            @csrf
            <div class="curso">
                <div><h2>{{ $categoria->Nombre}}</h2>
                @if($categoria->Nombre=="Categoría A2")
                        <a href="{{ route('evidenciasA2') }}">
                            <div><img class="ca2" src="{{ asset('img/categoriaa2.png') }}" alt=""></div>
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">Inspeccionar</p>
                        </a>
                    @elseif($categoria->Nombre=="Categoría B1")
                        <a href="{{ route('evidenciasB1') }}">
                            <div><img class="cb1" src="{{ asset('img/categoriab1.png') }}" alt=""></div>
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">Inspeccionar</p>
                        </a>
                    @elseif($categoria->Nombre=="Categoría C1")
                        <a href="{{ route('evidenciasC1') }}">
                            <div><img class="cc1" src="{{ asset('img/categoriac1.png') }}" alt=""></div>
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">Inspeccionar</p>
                        </a>
                    @elseif($categoria->Nombre=="Categoría C2")
                        <a href="{{ route('evidenciasC2') }}">
                            <div><img class="cc2" src="{{ asset('img/categoriac2.png') }}" alt=""></div>
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">Inspeccionar</p>
                        </a>
                @endif
                </div>
            </div>
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
