<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <title>Document</title>
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
            $cursoDeConduccion = DB::table('asesores')
            ->join('categorias', 'asesores.Id_categoria', '=', 'categorias.Id_categoria')
            ->select('categorias.Nombre')
            ->where('asesores.iduser', $aprendizId)
            ->get();
        @endphp
        @if ($cursoDeConduccion)
        @foreach ($cursoDeConduccion as $categoria)
        @csrf
        <div class="curso">
            <div><h2>{{ $categoria->Nombre}}</h2>
            @if($categoria->Nombre=="Categoría A2")
                    <a href="{{ route('categoriaA2.index') }}">
                        <div><img class="ca2" src="{{ asset('img/categoriaa2.png') }}" alt=""></div>
                        <p>Categoria A2 de motocicletas</p>
                    </a>
                @elseif($categoria->Nombre=="Categoría B1")
                    <a href="{{ route('categoriaB1.index') }}">
                        <div><img class="cb1" src="{{ asset('img/categoriab1.png') }}" alt=""></div>
                        <p>Categoria B1 de automoviles particulares</p>
                    </a>
                @elseif($categoria->Nombre=="Categoría C1")
                    <a href="{{ route('categoriaC1.index') }}">
                        <div><img class="cc1" src="{{ asset('img/categoriac1.png') }}" alt=""></div>
                        <p>Categoria C1 de automoviles de servicio publico</p>
                    </a>
                @elseif($categoria->Nombre=="Categoría C2")
                    <a href="{{ route('categoriaC2.index') }}">
                        <div><img class="cc2" src="{{ asset('img/categoriac2.png') }}" alt=""></div>
                        <p>Categoria C2 de Turbos</p>
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
