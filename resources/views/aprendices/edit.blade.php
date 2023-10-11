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
    <form action=" {{route ('aprendices.update', $aprendices->id) }})" method="put">
        @csrf
            <div  class="mt-4">
                <label for="">Nombres</label>
                <input id="" class="block mt-1 w-full" name="nombres" type="text" value="{{$aprendices->name}}">
            </div>
            <div  class="mt-4">
                <label for="">Apellidos</label>
                <input id="" class="block mt-1 w-full" name="apellidos" type="text" value="{{$aprendices->lastname}}">
            </div  class="mt-4">
            <div>
                <label for="">Contacto</label>
                <input id="" class="block mt-1 w-full" name="contacto" type="text" value="{{$aprendices->contacto}}">
            </div>
            <div  class="mt-4">
                <label for="">Fecha nacimiento</label>
                <input type="date" class="block mt-1 w-full" name="fechanacimiento" id="" value="{{$aprendices->fechanacimiento}}">
            </div>
            <div  class="mt-4">
                <x-label for="tipodocumento" value="{{$aprendices->TipoDocumento}}"/>
                    <select id="" class="block mt-1 w-full" type="text" name="tipodocumento">
                        <Option>Cédula de ciudadanía</Option>
                        <option>Tarjeta de identidad</option>
                        <option>Cédula de extranjería</option>
                    </select>
            </div>
            <div  class="mt-4">
                <label for="">Número de documento</label>
                <input type="number" name="numerodocumento" id="" class="block mt-1 w-full" value="{{$aprendices->NumeroDocumento}}">
            </div>
            <div class="flex items-center justify-center mt-4">       
                <x-button class="ml-4">
                    {{ __('Actualizar') }}
                </x-button>
            </div>
</div>
</form>
</x-authentication-card>
</x-guest-layout>
