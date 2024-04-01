@extends('layouts.plantilla')

@section('title')
    {{strtoupper($familias->scientific_name)}}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center pt-3 pb-3 mb-4 h1 border-bottom fw-light">Lista de especies</h1>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                <img width="200" src="{{asset('storage/' . $familias->image)}}" alt="">
                <h1 class="display-6 mb-2">{{strtoupper($familias->scientific_name)}}</h1>
                <p class="lead fw-medium my-2 fw-light d-inline">Nombre comun: </p>
                <p class="lead d-inline">{{strtoupper($familias->common_name)}}</p>
                <p class="d-block my-2"></p>
                <p class="lead fw-medium mt-2 mb-1 d-inline">Descripcion:</p>
                <p class="lead mb-2 d-inline">{{$familias->description}}</p>
                <p class="lead fw-medium mt-2">Numero especies registradas:</p>
                <p class="lead mb-11">{{ $plantas->count() }}</p>
            </div> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <h1 class="h4 p-2 text-center bg-green-700 rounded text-light fw-light">Especies de la familia: {{strtoupper($familias->scientific_name)}}</h1>
                @foreach ($plantas as $item)
                <a target="_blank" href="{{route('plantas.show', $item->id)}}">
                    <div class="lead text-capitalize my-2 link-planta">
                        <p>{{$item->scientific_name}}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection