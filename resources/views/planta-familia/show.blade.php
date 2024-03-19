@extends('layouts.app')

@section('template_title')
    {{ $plantaFamilia->name ?? __('Show') . " " . __('Planta Familia') }}
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
                            <a class="btn btn-primary" href="{{ route('planta-familias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $plantaFamilia->image }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cientifico:</strong>
                            {{ $plantaFamilia->scientific_name }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Popular:</strong>
                            {{ $plantaFamilia->common_name }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Publicacion:</strong>
                            {{ $plantaFamilia->publication_date }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $plantaFamilia->description }}
                        </div>
                        <div class="form-group">
                            <strong>Id Familia:</strong>
                            {{ $plantaFamilia->id }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
