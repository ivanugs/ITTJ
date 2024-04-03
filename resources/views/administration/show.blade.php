@extends('layouts.app')

@section('template_title')
    {{ $plantaFamilias->name ?? __('Show') . " " . __('Planta Familia') }}
@endsection

@section('content')
<link href="{{ asset('css/show.css') }}" rel="stylesheet">
    <section class="container d-flex justify-content-center align-items-center">
        <div class="col-lg-10 col-md-10 col-sm-12 col-sx-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">{{ __('Ver') }}</span>
                    <div class="d-inline-flex">
                        <a class="btn btn-primary" href="{{ route('admin.index') }}"> {{ __('Regresar') }}</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <strong>Tipo:</strong>
                        {{ strtoupper($plantaFamilias->type) }}
                    </div>
                    <div class="form-group">
                        <strong>Nombre Cientifico:</strong>
                        {{ $plantaFamilias->scientific_name }}
                    </div>
                    <div class="form-group">
                        <strong>Nombre Popular:</strong>
                        {{ $plantaFamilias->common_name }}
                    </div>
                    <div class="form-group">
                        <strong>Familia:</strong>
                        {{ $plantaFamilias->familyName }}
                    </div>
                    <div class="form-group">
                        <strong>Descripcion:</strong>
                        {{ $plantaFamilias->description }}
                    </div>
                    <div class="form-group">
                        <strong>Fecha Publicacion:</strong>
                        {{ $plantaFamilias->updated_at }}
                    </div>
                    <div class="form-group">
                        {{-- Se comento esta linea para no mostrar el trxto de de imagen a un lado --}}
                        {{-- <strong>Imagen:</strong> --}}
                        <img src="{{ asset('storage/' . $plantaFamilias->image) }}" alt="{{$plantaFamilias->image}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
