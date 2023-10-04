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

