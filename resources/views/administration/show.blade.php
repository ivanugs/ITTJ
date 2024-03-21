@extends('layouts.app')

@section('template_title')
    {{ $plantaFamilias->name ?? __('Show') . " " . __('Planta Familia') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Planta Familia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        {{-- 
                            TIPO
                            NOMBRE CIENTIFICO
                            NOMBRE COMMUN
                            FAMILIA
                            IMAGEN
                            DESCRIPCION
                            PIE -- FECHA DE PUBLICACION
                        --}}
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $plantaFamilias->type }}
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
                            <strong>Id Familia:</strong>
                            {{ $plantaFamilias->id }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img src="{{ asset('storage/' . $plantaFamilias->image) }}" alt="{{$plantaFamilias->image}}">
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $plantaFamilias->description }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Publicacion:</strong>
                            {{ $plantaFamilias->publication_date }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
