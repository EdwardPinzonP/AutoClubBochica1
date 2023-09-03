@if(Auth::user()->rol=="Aprendiz")
    <div class="apre">Hola Aprendiz {{ Auth::user()->name }}</div>
    @section('content')
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <ul>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Progreso') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Horario') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aprendices.index') }}">{{ __('Participantes') }}</a>
                </li>
            </div>
        </nav>
        
    </div>
    @endsection

@elseif(Auth::user()->rol=="Administrador")
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
        <h1>HOLA SOY ADMINISTRADOR</h1>
    </div>
    @endsection

@elseif(Auth::user()->rol=="Instructor")
    @section('content')
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <ul>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Lista de estudiantes') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">{{ __('Horario') }}</a>
                </li>
            </ul>
            </div>
        </nav>
            <h1>HOLA SOY INSTRUCTOR</h1>
    </div>
    @endsection
@endif
