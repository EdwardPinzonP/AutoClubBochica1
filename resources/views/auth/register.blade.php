<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <img style="height: 100px; width: 100px; margin: 0 auto" src="{{ asset('img/ACB.png') }}" alt="">

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-label for="name" value="{{ __('Rol') }}" />
                <div class="mt-4">
                    <select name="rol" id="rol" class="block mt-1 w-full rounded" autofocus>
                        <option value="Aprendiz">Aprendiz</option>
                        <option value="Instructor">Instructor</option>
                    </select>
                </div>
            </div>

            <div style="margin-top: 15px">
                <x-label for="name" value="{{ __('Nombre') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div style="margin-top: 15px">
                <x-label for="lastname" value="{{ __('Apellido') }}" />
                <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
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
                <x-label for="numerodocumento" value="{{ __('Número de documento') }}" />
                <x-input id="numerodocumento" class="block mt-1 w-full" type="number" name="numerodocumento"/>
            </div>

            <div class="mt-4">
                <x-label for="fechanacimiento" value="{{ __('Fecha de nacimiento') }}" />
                <x-input id="fechanacimiento" class="block mt-1 w-full" type="date" name="fechanacimiento"/>
            </div>

            <div class="mt-4">
                <x-label for="contacto" value="{{ __('Número de télefono') }}" />
                <x-input id="contacto" class="block mt-1 w-full" type="number" name="contacto"/>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('¿Ya estás registrado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
