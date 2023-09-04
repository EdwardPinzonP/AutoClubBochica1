@extends('layouts.instructor')
@section('content')
<div>
    <form action=" {{route ('instructores.update', Auth::user()->id) }})" method="put">
        @csrf
    @if($emp>0)
            @forelse($instructores as $emp)
            <div>
                <label for="">Codigo usuario</label>
                <input id="" name="codigo" type="text" value="{{$emp->iduser}}">
            </div>
            <div>
                <label for="">Nombres</label>
                <input id="" name="nombres" type="text" value="{{$emp->Nombres}}">
            </div>
            <div>
                <label for="">Apellidos</label>
                <input id="" name="apellidos" type="text" value="{{$emp->Apellidos}}">
            </div>
            <div>
                <label for="">Contacto</label>
                <input id="" name="contacto" type="text" value="{{$emp->Contacto}}">
            </div>
            <div>
                <x-label for="tipodocumento" value="{{$emp->TipoDocumento}}">
                    <select id="" type="text" name="tipodocumento">
                        <Option value="">Cédula de ciudadanía</Option>
                        <option value="">Tarjeta de identidad</option>
                        <option value="">Cédula de extranjería</option>
                    </select>
            </div>
            <div>
                <label for="">Número de documento</label>
                <input type="number" name="numerodocumento" id="" value="{{$emp->NumeroDocumento}}">
            </div>
            <div>
                <label for="">Fecha nacimiento</label>
                <input type="date" name="fechanacimiento" id="" value="{{$emp->FechaNacimiento}}">
            </div>
            <div>
                <label for="">Correo</label>
                <input id="" name="correo" type="text" value="{{$emp->Correo}}">
            </div>
            @empty
            @endforelse
    @else
    <div>
        <label for="">Codigo usuario</label>
        <input id="" name="codigo" type="text" value="{{ Auth::user()->id}}">
    </div>
    <div>
        <label for="">Nombres</label>
        <input id="" name="nombres" type="text" value="{{ Auth::user()->Nombres}}">
    </div>
    <div>
        <label for="">Apellidos</label>
        <input id="" name="apellidos" type="text" value="{{ Auth::user()->Apellidos}}">
    </div>
    <div>
        <label for="">Contacto</label>
        <input id="" name="contacto" type="text" value="{{ Auth::user()->Contacto}}">
    </div>
    <div>
        <x-label for="tipodocumento" value="{{ Auth::user()->TipoDocumento}}">
            <select id="" type="text" name="tipodocumento">
                <Option value="">Cédula de ciudadanía</Option>
                <option value="">Tarjeta de identidad</option>
                <option value="">Cédula de extranjería</option>
            </select>
    </div>
    <div>
        <label for="">Número de documento</label>
        <input type="number" name="numerodocumento" id="" value="{{ Auth::user()->NumeroDocumento}}">
    </div>
    <div>
        <label for="">Fecha nacimiento</label>
        <input type="date" name="fechanacimiento" id="" value="{{ Auth::user()->FechaNacimiento}}">
    </div>
    <div>
        <label for="">Correo</label>
        <input id="" name="correo" type="text" value="{{ Auth::user()->Correo}}">
    </div>
    @endif
        <button>Actualizar</button>
    </form>
</div>
@endsection