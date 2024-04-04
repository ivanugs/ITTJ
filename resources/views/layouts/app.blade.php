<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    {{-- Si comento la sigiente linea aparese el login y regitro --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link 
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    >
    <title>{{ config('app.name', 'Administración') }}</title>

    <!-- Fonts -->

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<!-- Navbar login -->
<body>
    @auth
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-app">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto ">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a> --}}
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a> --}}
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @endauth
    <main class="">
        @yield('content')
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    <script>
        $(document).ready(function(){
            // Al cargar la página, comprobamos el valor inicial del select
            checkType();
        
            // Cuando el valor del select cambia, comprobamos nuevamente
            $('#type').change(function(){
                checkType();
            });
        
            function checkType() {
                // Obtenemos el valor seleccionado en el select
                var selectedType = $('#type').val();
        
                // Si el valor seleccionado es "familia", deshabilitamos el campo de entrada de texto
                if(selectedType == 'planta') {
                    $('#family').prop('disabled', false); // Si ya está deshabilitado, se habilita
                } else {
                    $('#family').prop('disabled', true); // Si está habilitado, se deshabilita
                }
            }
        });
        </script>
</body>
</html>
