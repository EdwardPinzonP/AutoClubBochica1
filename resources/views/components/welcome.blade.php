@if (Auth::user()->rol == "Aprendiz")
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    @section('content')
    <body>
        <div class="cont">
            <!-- Otro contenido que desees mostrar para el aprendiz -->
        </div>
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
                ->join('cursos', 'aprendices.Id_curso', '=', 'cursos.Id_curso')
                ->select('categorias.Nombre as Nombre','cursos.Duracion as Duracion')
                ->where('aprendices.iduser', $aprendizId)
                ->get();
            @endphp
            <ul>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('aprendices.edit', Auth::user()->id )}}">{{ __('Actualizar datos') }}</a>
                </li>
            </ul>
            @if ($cursoDeConduccion)
            @foreach ($cursoDeConduccion as $categoria)
            @csrf
            <a href="">
                <div class="curso">
                    <div><h2>{{ $categoria->Nombre }}</h2></div>
                    @if($categoria->Nombre=="Categoría A2")
                        <div><img class="ca2" src="{{ asset('img/categoriaa2.png') }}" alt=""></div>
                        <div><h2>Lectiva</h2></div>
                        <div>{{ $categoria->Duracion }}</div>
                        <div>Motocicletas, motociclos y mototriciclos de más de 125 cc de cilindraje</div>
                    @elseif($categoria->Nombre=="Categoría B1")
                        <div><img class="cb1" src="{{ asset('img/categoriab1.png') }}" alt=""></div>
                        <div><h2>Lectiva</h2></div>
                        <div>{{ $categoria->Duracion }}</div>
                        <div>Automóviles, motocarros, cuadrimotos, camperos, camionetas y microbuses de servicio partiular.</div>
                    @elseif($categoria->Nombre=="Categoría C1")
                        <div><img class="cc1" src="{{ asset('img/categoriac1.png') }}" alt=""></div>
                        <div><h2>Lectiva</h2></div>
                        <div>{{ $categoria->Duracion }}</div>
                        <div>Autómoviles, camperos, camionetas y microbuses de servicio público.</div>
                    @elseif($categoria->Nombre=="Categoría C2")
                        <div><img class="cc2" src="{{ asset('img/categoriac2.png') }}" alt=""></div>
                        <div><h2>Lectiva</h2></div>
                        <div>{{ $categoria->Duracion }}</div>
                        <div>Camiones rígidos, buses y busetas de servicio particular.</div>
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
    @endsection
@elseif(Auth::user()->rol=="Administrador")
<div class="admin">Hola {{ Auth::user()->name }}</div>
    @section('content')
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="">{{ __('Listado instructores') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">{{ __('Listado aprendices') }}</a>
                    </li>
                </ul>
                </div>
        </nav>
    </div>
    @endsection

@elseif(Auth::user()->rol=="Instructor")
<div class="instr">Hola Instructor {{ Auth::user()->name }}</div>
    @section('content')
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <ul>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('instructores.edit', Auth::user()->id )}}">{{ __('Actualizar datos') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Lista de estudiantes') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Horario') }}</a>
                </li>
            </ul>
            </div>
        </nav>
    </div>
    @endsection
@endif
