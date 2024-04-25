@extends('layouts.app')

@section('template_title')
    {{ $plantaFamilias->name ?? __('Show') . " " . __('Planta Familia') }}
@endsection

@section('content')
<style>
    :root{
        --var-color-main: #2d572c;
        --var-color-links-primario: #2c7959;
        --var-color-links-secundario: #44b687;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 10px; 
        padding: 20px; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
        background-color: var(--var-color-main);
        color: #ffffff;
    }

    .card-header {
        background-color: var(--var-color-main);
        color: #fdfdfd;
        padding: 10px 15px;
        border-bottom: 1px solid #ccc;
        border-radius: 5px 5px 0 0;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 8px;
        text-align: left;
    }

    .table th {
        background-color: #343a40; 
            color: #ffffff;
    }

    .table td {
        border-bottom: 3px solid var(--var-color-main);
    }

    /* modal */
    .modal-header {
        background-color:#336132;
        color: #fffdfd;  
        padding: 10px 15px;
        border-radius: 5px 5px 0 0; 
    }

    .form-group {
        text-align: center;
    }

    .form-group img {
        display: inline-block;
    }

    .float-left {
        float: left;
    }

    .text-danger {
        color: red;
    }
</style>
    <section class="container d-flex justify-content-center align-items-center">
        <div class="col-lg-10 col-md-10 col-sm-12 col-sx-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="card-title display-6">{{ __('Ver datos del registro') }}</span>
                    <div class="d-inline-flex">
                        <a class="btn btn-danger fs-5" href="{{ route('admin.index') }}"> {{ __('Regresar') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group fs-5 mb-2 text-start">
                        <strong>Tipo:</strong>
                        {{ strtoupper($plantaFamilias->type) }}
                    </div>
                    <div class="form-group fs-5 mb-2 text-start">
                        <strong>Nombre Cientifico:</strong>
                        {{ $plantaFamilias->scientific_name }}
                    </div>
                    <div class="form-group fs-5 mb-2 text-start">
                        <strong>Nombre Popular:</strong>
                        {{ $plantaFamilias->common_name }}
                    </div>
                    <div class="form-group fs-5 mb-2 text-start">
                        <strong>Familia:</strong>
                        {{ $plantaFamilias->familyName }}
                    </div>
                    <div class="form-group fs-5 mb-2 text-start">
                        <strong>Descripcion:</strong>
                        {{ $plantaFamilias->description }}
                    </div>
                    <div class="form-group fs-5 mb-2 text-start">
                        <strong>Fecha Publicacion y Hora:</strong>
                        {{ $plantaFamilias->updated_at }}
                    </div>
                    <div class="form-group fs-5 mb-2 text-start">
                        <img src="{{ asset('storage/' . $plantaFamilias->image) }}" alt="{{$plantaFamilias->image}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
