<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>
        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <style>
            .actualizar{
                display: grid;
                justify-content: center;
                align-items: center;
                margin-top: 10px;
            }
        </style>
<div>
    <form action=" {{route ('instructores.update', $instructores->id) }})" method="PUT">
        @csrf
            <div class="mt-4">
                <label for="">Nombres</label>
                <input id="" class="block mt-1 w-full" name="nombres" type="text" value="{{$instructores->name}}">
            </div>
            <div class="mt-4">
                <label for="">Apellidos</label>
                <input id="" class="block mt-1 w-full" name="apellidos" type="text" value="{{$instructores->lastname}}">
            </div>
            <div class="mt-4">
                <label for="">Contacto</label>
                <input id="" class="block mt-1 w-full" name="contacto" type="text" value="{{$instructores->contacto}}">
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
                <label for="">Número de documento</label>
                <input type="text" name="numerodocumento" id="" class="block mt-1 w-full" value="{{$instructores->NumeroDocumento}}">
            </div>
            <div class="mt-4">
                <label for="">Fecha nacimiento</label>
                <input type="date" name="fechanacimiento" id="" class="block mt-1 w-full" value="{{$instructores->fechanacimiento}}">
            </div>
            <div class="actualizar">
                <x-button class="ml-4">Actualizar</x-button>
            </div>
</div>
</form>
</x-authentication-card>
</x-guest-layout>
