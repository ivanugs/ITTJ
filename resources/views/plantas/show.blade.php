@extends('layouts.plantilla')

@section('title')
    {{ $plantas->scientific_name}}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center pt-3 pb-3 mb-4 h1 border-bottom fw-light text-capitalize">{{$plantas->scientific_name}}</h1>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-break">
                <div class="pl-3">
                    <p class="lead fw-medium my-2 fw-light">Nombre científico:</p>
                    <p class="lead text-capitalize">{{$plantas->scientific_name}}</p>
                </div>
                <div class="pl-3">
                    <p class="lead fw-medium my-2 fw-light">Nombre común: </p>
                    <p class="lead">{{strtoupper($plantas->common_name)}}</p>
                </div>
                <div class="pl-3">
                    <p class="lead fw-medium">Familia:</p>
                    <p class="lead mb-2">{{$plantas->familyName}}</p>
                </div>
                <div class="pl-3">
                    <p class="lead fw-medium mt-2 mb-1">Descripción:</p>
                    <p class="lead mb-2" style="width: 100%;">{{$plantas->description}}</p>
                </div>
                <div class="pl-3">
                    <p class="lead fw-medium mt-2 mb-1">Fecha de actualización:</p>
                    <p class="lead mb-2">{{$plantas->updated_at}}</p>
                </div>
                <div class="float-left">
                    <a class="btn btn-success mb-5" href="#" onclick="goBack()"> {{ __('Back') }}</a>
                </div>
            </div>
            
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center">
                <img src="{{ asset('storage/' . $plantas->image) }}" alt="{{$plantas->image}}">
            </div>            
        </div>
    </div>
</div>

<script>
    function goBack() {
        window.close();
    }
</script>
@endsection
