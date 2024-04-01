@extends('layouts.plantilla')

@section('title', 'Herbario Virtual | ITTJ')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li
              data-bs-target="#carouselId"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="First slide"
            ></li>
            <li
              data-bs-target="#carouselId"
              data-bs-slide-to="1"
              aria-label="Second slide"
            ></li>
            <li
              data-bs-target="#carouselId"
              data-bs-slide-to="2"
              aria-label="Third slide"
            ></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img
                src="{{asset('images/carousel/dicliptera-peduncularis-nees.jpg')}}"
                class="w-100 d-block"
                alt="First slide"
              />
            </div>
            <div class="carousel-item">
              <img
                src="{{asset('images/carousel/hyptis-capitata-jacq.jpg')}}"
                class="w-100 d-block"
                alt="Second slide"
              />
            </div>
            <div class="carousel-item">
              <img
               src="{{asset('images/carousel/quercus-resinosa-liebm.jpg')}}"
                class="w-100 d-block"
                alt="Third slide"
              />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div id="caption-1" class="carousel-text text-wrap carousel-caption-custom">
          <p class="text-decoration-underline fs-2">Inicio</p>
          <h1 class="display-2">Bienvendio al Herbario Virtual</h1>
          <p class="fs-5">Some representative placeholder content for the second slide.</p>
        </div>
        <div id="caption-2" class="carousel-text text-wrap carousel-caption-custom">
          <p class="text-decoration-underline fs-2">Especimenes</p>
          <h1 class="display-2">Descubre la gran cantidad de especies que tenemos.</h1>
          <p class="fs-5">Some representative placeholder content for the second slide.</p>
        </div>
        <div id="caption-3" class="carousel-text text-wrap carousel-caption-custom">
          <p class="text-decoration-underline fs-2">Acerca De</p>
          <h1 class="display-2">Conoce más acerca de este proyecto</h1>
          <p class="fs-5">Some representative placeholder content for the second slide.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var carousel = document.getElementById('carouselId');
    carousel.addEventListener('slid.bs.carousel', function() {
      var activeIndex = carousel.querySelector('.carousel-item.active').getAttribute('data-bs-slide-to');
      var captions = document.querySelectorAll('.carousel-text');
      captions.forEach(function(caption) {
        caption.style.display = 'none';
      });
      document.getElementById('caption-' + activeIndex).style.display = 'block';
    });
  });
</script>


    {{-- <div id="carouselExampleCaptions" class="carousel carousel-dark slide carousel-custom" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
    
        <div class="carousel-item carousel-item-custom active" data-bs-interval="4000">
          <img src="{{asset('images/carousel/dicliptera-peduncularis-nees.jpg')}}" class="image-custom" alt="dicliptera-peduncularis-nees">
          <div class="carousel-caption text-wrap carousel-caption-custom">
            <p class="text-decoration-underline fs-2">Inicio</p>
            <h1 class="display-2">Bienvendio al Herbario Virtual</h1>
            <p class="fs-5">Some representative placeholder content for the second slide.</p>
          </div>
        </div>
    
        <div class="carousel-item carousel-item-custom" data-bs-interval="4000">
          <img src="{{asset('images/carousel/hyptis-capitata-jacq.jpg')}}" class="image-custom" alt="hyptis-capitata-jacq">
          <div class="carousel-caption carousel-caption-custom">
            <p class="text-decoration-underline fs-2">Especimenes</p>
            <h1 class="display-2">Descubre la gran cantidad de especies que tenemos.</h1>
            <p class="fs-5">Some representative placeholder content for the second slide.</p>
          </div>
        </div>
    
        <div class="carousel-item carousel-item-custom" data-bs-interval="4000">
          <img src="{{asset('images/carousel/quercus-resinosa-liebm.jpg')}}" class="image-custom" alt="quercus-resinosa-liebm">
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
    </div> --}}
@endsection