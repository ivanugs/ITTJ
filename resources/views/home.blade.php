@extends('layouts.plantilla')

@section('title', 'Herbario Virtual | ITTJ')

@section('content')
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide carousel-custom" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
    
        <div class="carousel-item carousel-item-custom active" data-bs-interval="4000">
          <img src="{{asset('images/carousel/dicliptera-peduncularis-nees.jpg')}}" class="d-block w-100" alt="dicliptera-peduncularis-nees">
          <div class="carousel-caption carousel-caption-custom">
            <p class="text-decoration-underline fs-2">Inicio</p>
            <h1 class="display-2">Bienvendio al Herbario Virtual</h1>
            <p class="fs-5">Some representative placeholder content for the second slide.</p>
          </div>
        </div>
    
        <div class="carousel-item carousel-item-custom" data-bs-interval="4000">
          <img src="{{asset('images/carousel/hyptis-capitata-jacq.jpg')}}" class="d-block w-100" alt="hyptis-capitata-jacq">
          <div class="carousel-caption carousel-caption-custom">
            <p class="text-decoration-underline fs-2">Especimenes</p>
            <h1 class="display-2">Descubre la gran cantidad de especies que tenemos.</h1>
            <p class="fs-5">Some representative placeholder content for the second slide.</p>
          </div>
        </div>
    
        <div class="carousel-item carousel-item-custom" data-bs-interval="4000">
          <img src="{{asset('images/carousel/quercus-resinosa-liebm.jpg')}}" class="d-block w-100" alt="quercus-resinosa-liebm">
          <div class="carousel-caption carousel-caption-custom">
            <p class="text-decoration-underline fs-2">Acerca De</p>
            <h1 class="display-2">Conoce más acerca de este proyecto</h1>
            <p class="fs-5">Some representative placeholder content for the second slide.</p>
          </div>
        </div>
    
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
@endsection