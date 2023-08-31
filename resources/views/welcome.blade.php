<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AutoClub Bochica || Bienvenidos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('img/ACB.png') }}">
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/categorias.css') }}">
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{background-color: rgb(233, 233, 233);margin:0;line-height:inherit;}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var
            (--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selectio{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / va(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 /var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media(prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hove{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), va(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(va(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media(prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(1724 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighte{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30'fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 191374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3Csvg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var
            (--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400
            {--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}.menuInicio{display: grid;grid-template-columns: 50% 50%;height: auto;width: 100%;margin-top: 10px;margin-block-end: 10px;background-color: white}.logo{display: grid;grid-template-columns: 30% 70%}.imagenL{height: 100%; width: 90%;margin-top: 3px;margin-left: 3px}.contenido{display: grid;grid-template-rows: auto auto auto}.bnd{display: grid;grid-template-columns: 50% 25% 25%}.amarillo{border: 2px solid yellow}.azul{border: 2px solid blue}.rojo{border: 2px solid red}.nombre{text-align: right; font-size: 30px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif}.ubica{text-align: right;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px}.cond{text-align: right;font-family: cursive}.auten{text-align: right;margin-right: 20px;position: relative;top: 40%}.imagenF{height: auto;width: 100%;}.fnd{width: 100%;}footer{background-color: rgb(49, 49, 49); height: auto;text-align: center;color: white; height: 300px;position: relative;}footer p{position: absolute;bottom: 0;left: 0;right: 0;margin: 0;padding: 10px;}.cont{display: grid;grid-template-columns: 50% 50%;height: auto;}.tele{display: grid;grid-template-rows: auto auto auto}.teleuno{display: grid;grid-template-columns: 40% 60%;}.correo{position: absolute;bottom: 0;left: 0;right: 0;margin: 0;padding: 30px;font-size: 30px}
        </style>
    </head>
    <body class="antialiased">
        <div class="menuInicio">
            <div class="logo">
                <div>
                    <img class="imagenL" src="{{ asset('img/ACB.png') }}" alt="">
                </div>
                <div class="contenido">
                    <div><h2 class="nombre">AutoClub Bochica</h2></div>
                    <div>
                        <h2 class="ubica">Escuela Automovilistica de Tunja</h2>
                        <div class="bnd">
                            <div class="amarillo"></div>
                            <div class="azul"></div>
                            <div class="rojo"></div>
                        </div>
                    </div>
                    <div><h2 class="cond">Conducción segura</h2></div>
                </div>
            </div>
            <div class="auten">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" style="font-family: cursive">Iniciar Sesión</a>
                
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="margin-left: 20px;font-family:cursive">Regístrate</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        <div class="imagenF">
            <div class="inf">
                <h1 class="infor">¿Qué esperás para ser parte de nuestra escuela?</h1>
                <h1 class="informa">¡Inscríbete ahora!</h1>
            </div>
        </div>
        <h1 class="cursos">Cursos</h1>
        <div>
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="ca2">
                                <div>
                                    <h2 class="mt-6 text-xl font-semibold text-gray-900">Categoria A2</h2>
                                </div>
                                <div>
                                    <img src="{{ asset('img/categoriaa2.png') }}" alt="">
                                </div>
                                <div style="font-size: 20px" class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Desde: $922.000
                                </div>
                                <div>
                                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                        En nuestra escuela de conducción, ofrecemos un completo programa de formación para la categoría A2, que se enfoca en motocicletas y ciclomotores. Si estás buscando obtener tu licencia para conducir estos vehículos de manera segura y confiada, nuestro equipo de instructores altamente capacitados está aquí para guiarte en cada paso del camino.
                                    </p>
                                </div>
                                @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}"><button class="boton">¡Inscribete ahora!</button></a>
                                @else
                                    <a href="{{ route('login') }}"><button class="boton">¡Inscribete ahora!</button></a>
                                @endauth
                            @endif
                            </div>
                        </div>
                        <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="cb1">
                                <div>
                                    <h2 class="mt-6 text-xl font-semibold text-gray-900">Categoria B1</h2>
                                </div>
                                <div>
                                    <img src="{{ asset('img/categoriab1.png') }}" alt="">
                                </div>
                                <div style="font-size: 20px" class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Desde: $1.122.000
                                </div>
                                <div style="margin-block-end: 20px">
                                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                        La categoría B1 en nuestra escuela de conducción te ofrece la oportunidad de aprender a manejar automóviles y vehículos ligeros de manera segura y eficiente. Esta categoría es ideal si estás buscando obtener tu licencia para conducir coches particulares, vehículos utilitarios deportivos (SUV) y otros vehículos ligeros.  
                                    </p>
                                </div>
                                <a href=""><button class="boton">¡Inscribete Ahora!</button></a>
                            </div>
                        </div>
                        <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="cc1">
                                <div>
                                    <h2 class="mt-6 text-xl font-semibold text-gray-900">Categoria C1</h2>
                                </div>
                                <div>
                                    <img src="{{ asset('img/categoriac1.png') }}" alt="">
                                </div>
                                <div style="font-size: 20px" class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Desde: $1.302.000
                                </div>
                                <div>
                                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                        La categoría C1 de nuestra escuela de conducción se enfoca en prepararte para manejar vehículos de carga ligera y transporte de personas. Si estás interesado en expandir tus habilidades de conducción y adquirir el conocimiento necesario para operar vehículos más grandes y versátiles, esta categoría es ideal para ti.
                                    </p>
                                </div>
                                <a href=""><button class="boton">¡Inscribete Ahora!</button></a>
                            </div>
                        </div>
                        <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="cc2">
                                <div>
                                    <h2 class="mt-6 text-xl font-semibold text-gray-900">Categoria C2</h2>
                                </div>
                                <div>
                                    <img src="{{ asset('img/categoriac2.png') }}" alt="">
                                </div>
                                <div style="font-size: 20px" class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Desde: $1.272.000
                                </div>
                                <div>
                                    <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                        La categoría C2 en nuestra escuela de conducción está diseñada para aquellos que desean adquirir las habilidades necesarias para operar vehículos comerciales medianos de manera segura y competente. Si tienes aspiraciones en el ámbito del transporte de carga o servicios de reparto, esta categoría es ideal para ti.
                                    </p>
                                </div>
                                <a href=""><button class="boton">¡Inscribete Ahora!</button></a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </body>
    <footer>
        <div class="cont">
            <div style="margin-top: 5px" class="tele">
                <div style="font-size: 30px">
                    <h2>Teléfonos</h2>
                </div>
                <div class="teleuno">
                    <div>
                        <svg style="margin-left: 85%" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </div>
                    <div style="text-align: left;font-size:25px">(608) 744-3856</div>
                </div>
                <div class="teleuno">
                    <div>
                        <svg style="margin-left: 85%" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </div>
                    <div style="text-align: left;font-size: 25px">740-0224</div>
                </div>
            </div>
            <div style="margin-top: 10px" class="tele">
                <div style="font-size: 25px">Dirección: Carrera 10 A #26-08</div>
                <div style="font-size: 25px">Barrio: Santa Lucía</div>
                <div style="font-size: 25px">Ciudad: Tunja</div>
            </div>
        </div>
        </div>
        <p class="correo">Correo: recepcion.autoclub@gmail.com</p>
        <p>AutoClub Bochica © 2023 - Todos los derechos reservados</p>
    </footer>
</html>
