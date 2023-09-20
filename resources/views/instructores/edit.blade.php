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
<div>
    <form action=" {{route ('instructores.update', Auth::user()->id) }})" method="put">
        @csrf
    @if($emp>0)
            @forelse($instructores as $emp)
            <div class="mt-4">
                <label for="">Codigo usuario</label>
                <input id="" class="block mt-1 w-full" name="codigo" type="text" value="{{$emp->iduser}}">
            </div>
            <div class="mt-4">
                <label for="">Nombres</label>
                <input id="" class="block mt-1 w-full" name="nombres" type="text" value="{{$emp->Nombres}}">
            </div>
            <div class="mt-4">
                <label for="">Apellidos</label>
                <input id="" class="block mt-1 w-full" name="apellidos" type="text" value="{{$emp->Apellidos}}">
            </div>
            <div class="mt-4">
                <label for="">Contacto</label>
                <input id="" class="block mt-1 w-full" name="contacto" type="text" value="{{$emp->Contacto}}">
            </div>
            <div class="mt-4">
                <x-label for="tipodocumento" value="{{$emp->TipoDocumento}}"/>
                    <select id="tipodocumento" class="block mt-1 w-full" type="text" name="tipodocumento">
                        <option value="Cédula de ciudadanía" {{ Auth::user()->TipoDocumento == 'Cédula de ciudadanía' ? 'selected' : '' }}>Cédula de ciudadanía</option>
                        <option value="Tarjeta de identidad" {{ Auth::user()->TipoDocumento == 'Tarjeta de identidad' ? 'selected' : '' }}>Tarjeta de identidad</option>
                        <option value="Cédula de extranjería" {{ Auth::user()->TipoDocumento == 'Cédula de extranjería' ? 'selected' : '' }}>Cédula de extranjería</option>
                    </select>                    
            </div>
            <div class="mt-4">
                <label for="">Número de documento</label>
                <input type="number" name="numerodocumento" id="" class="block mt-1 w-full" value="{{$emp->NumeroDocumento}}">
            </div>
            <div class="mt-4">
                <label for="">Fecha nacimiento</label>
                <input type="date" name="fechanacimiento" id="" class="block mt-1 w-full" value="{{$emp->FechaNacimiento}}">
            </div>
            <div class="mt-4">
                <label for="">Correo</label>
                <input id="" class="block mt-1 w-full" name="correo" type="text" value="{{$emp->Correo}}">
            </div>
            @empty
            @endforelse
    @else
    <div class="mt-4">
        <label for="">Codigo usuario</label>
        <input id="" class="block mt-1 w-full" name="codigo" type="text" value="{{ Auth::user()->id}}">
    </div>
    <div class="mt-4">
        <label for="">Nombres</label>
        <input id="" class="block mt-1 w-full" name="nombres" type="text" value="{{ Auth::user()->Nombres}}" autofocus>
    </div>
    <div class="mt-4">
        <label for="">Apellidos</label>
        <input id="" class="block mt-1 w-full" name="apellidos" type="text" value="{{ Auth::user()->Apellidos}}">
    </div>
    <div class="mt-4">
        <label for="">Contacto</label>
        <input id="" class="block mt-1 w-full" name="contacto" type="text" value="{{ Auth::user()->Contacto}}">
    </div>
    <div class="mt-4">
        <x-label for="tipodocumento" value="{{ __('Tipo de documento') }}"/>
<<<<<<< HEAD
            <select id="tipodocumento" class="block mt-1 w-full" type="text" name="tipodocumento">
                <option value="Cédula de ciudadanía" {{ Auth::user()->TipoDocumento == 'Cédula de ciudadanía' ? 'selected' : '' }}>Cédula de ciudadanía</option>
                <option value="Tarjeta de identidad" {{ Auth::user()->TipoDocumento == 'Tarjeta de identidad' ? 'selected' : '' }}>Tarjeta de identidad</option>
                <option value="Cédula de extranjería" {{ Auth::user()->TipoDocumento == 'Cédula de extranjería' ? 'selected' : '' }}>Cédula de extranjería</option>
=======
            <select id="" class="block mt-1 w-full" type="text" name="tipodocumento" value="{{ Auth::user()->TipoDocumento}}">
                <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                <option value="Cédula de extranjería">Cédula de extranjería</option>
>>>>>>> d955ad5d951e6f213250548a04193c1c9f88a39f
            </select>
    </div>
    <div class="mt-4">
        <label for="">Número de documento</label>
        <input type="number" name="numerodocumento" id="" class="block mt-1 w-full" value="{{ Auth::user()->NumeroDocumento}}">
    </div>
    <div class="mt-4">
        <label for="">Fecha nacimiento</label>
        <input type="date" name="fechanacimiento" id="" class="block mt-1 w-full" value="{{ Auth::user()->FechaNacimiento}}">
    </div>
    <div class="mt-4">
        <label for="">Correo</label>
        <input id="" class="block mt-1 w-full" name="correo" type="text" value="{{ Auth::user()->Correo}}">
    </div>
    <div class="flex items-center justify-center mt-4">

        <x-button class="ml-4">
            {{ __('Actualizar') }}
            </x-button>
                        
    </div>
<<<<<<< HEAD
@endif
<x-button class="ml-4">Actualizar</x-button>
=======
@endif     
>>>>>>> d955ad5d951e6f213250548a04193c1c9f88a39f
</div>
</form>
</x-authentication-card>
</x-guest-layout>
