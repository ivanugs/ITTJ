@extends('layouts.app')

@section('template_title')
    {{ $plantaFamilias->name ?? __('Show') . " " . __('Planta Familia') }}
@endsection

@section('content')
<link href="{{ asset('css/show.css') }}" rel="stylesheet">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Planta Familia</span>
                        </div>
                        {{-- <div class="float">
                            <a class="btn btn-primary" href="{{ route('admin.index') }}"> {{ __('Back') }}</a>
                        </div> --}}
                    </div>
                    <div class="float">
                        <a class="btn btn-primary" href="{{ route('admin.index') }}"> {{ __('Atras') }}</a>
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
                            {{ $plantaFamilias->publication_date }}
                        </div>
                        <div class="form-group">
                            {{-- Se comento esta linea para no mostrar el trxto de de imagen a un lado --}}
                            {{-- <strong>Imagen:</strong> --}}
                            <img src="{{ asset('storage/' . $plantaFamilias->image) }}" alt="{{$plantaFamilias->image}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
