<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio || Admin</title>
</head>
<body>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        footer {
            margin-top: 10%;
            color: rgb(102, 102, 102);
            padding: 10px;
            text-align: center;
        }

        .cursos{
            display: grid;
            grid-template-columns: 30% 70%;
            width: 150px;
            height: 30px;
            margin-left: 5%;
        }

        .cont {
            padding: 20px;
            background-color: #f0f0f0;
            margin: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .cursos {
            display: flex;
            align-items: center;
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
            font-family: cursive;
            font-size: 20px;
        }

        .curso {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            margin-left: 25px;
            height: 200px;
            margin-top: 10px;
            border-radius: 8px;
        }

        .ca2{
            height: 100px;
            width: 100px;
            margin: 0 auto;
        }

        .cb1{
            height: 100px;
            width: 150px;
            margin: 0 auto;
        }

        .cc1{
            height: 100px;
            width: 150px;
            margin: 0 auto;
        }

        .cc2{
            height: 100px;
            width: 150px;
            margin: 0 auto;
        }

        .curso h2 {
            font-size: 18px;
            font-weight: bold;
        }


.categoria-container {
    text-align: center;
    transition: box-shadow ease;
}

.categoria-container h2 {
    margin-bottom: 10px;
}

.categoria-link {
    display: inline-block;
    text-decoration: none;
    color: inherit;
}

.categoria-link:hover img {
    opacity: 0.8;
}

.categoria-link p {
    margin-top: 10px;
}

.categoria-container:hover {
    box-shadow: 0 0 10px rgba(134, 134, 134, 0.959); /* Cambia el color o tamaño según prefieras */
}rgba(121, 121, 121, 0.959)


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

        .conta{
            margin: 0 auto;
            width: 95%;
            text-align: center;
            display: grid;
            grid-template-columns: 20% 20% 20% 20%;
            justify-content: center;
            align-items: center;
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
            <div class="categoria-container">
                <h2>{{ $categoria->Nombre}}</h2>
                @if($categoria->Nombre=="Categoría A2")
                    <a href="{{ route('categoriaA2') }}" class="categoria-link">
                        <div><img class="ca2" src="{{ asset('img/categoriaa2.png') }}" alt=""></div>
                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">Inspeccionar</p>
                    </a>
                @elseif($categoria->Nombre=="Categoría B1")
                    <a href="{{ route('categoriaB1.index') }}" class="categoria-link">
                        <div><img class="cb1" src="{{ asset('img/categoriab1.png') }}" alt=""></div>
                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">Inspeccionar</p>
                    </a>
                @elseif($categoria->Nombre=="Categoría C1")
                    <a href="{{ route('categoriaC1.index') }}" class="categoria-link">
                        <div><img class="cc1" src="{{ asset('img/categoriac1.png') }}" alt=""></div>
                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">Inspeccionar</p>
                    </a>
                @elseif($categoria->Nombre=="Categoría C2")
                    <a href="{{ route('categoriaC2.index') }}" class="categoria-link">
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

