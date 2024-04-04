    <!--app se cambio por por palntilla que esta en la carpeta layout-->
@extends('layouts.app')
@section('content')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="card mt-4 custom-card "> <!-- Nadamas se agregado mt-4 para añadir un margen en la parte superior -->
                <div class="card-header fs-4">{{ __('Iniciar Sesion') }}</div>
                {{-- <div class="card-body"> --}}
                    <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end fs-5">{{ __('Correo') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <input 
                                    id="email" 
                                    type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    required 
                                    autocomplete="email" 
                                    autofocus 
                                    placeholder="Ingrese su correo electrónico" 
                                >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end fs-5">{{ __('Contraseña') }}</label>

                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <input 
                                    id="password" 
                                    type="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    name="password" 
                                    required 
                                    autocomplete="current-password"
                                    placeholder="Ingrese su contraseña"
                                >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 offset-md-4">
                                <button type="submit" class="btn btn-primary fs-5">
                                    {{ __('Iniciar Sesion') }}
                                </button>
                                <div class="d-inline p-3">
                                    <a href="{{ route('home') }}" class="btn btn-danger fs-5 my-2">Regresar</a>
                                </div>
                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
