@extends('layouts.plantilla')

@section('title', 'Herbario Virtual | ITTJ')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pt-3">
      <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
          <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
          <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('images/carousel/dicliptera-peduncularis-nees.jpg')}}" class="w-100 d-block" alt="First slide">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/carousel/hyptis-capitata-jacq.jpg')}}" class="w-100 d-block" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/carousel/quercus-resinosa-liebm.jpg')}}" class="w-100 d-block" alt="Third slide">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div id="content-captions" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-3" style="height: 512px;">
      <div id="caption-0" class="carousel-text text-wrap carousel-caption-custom">
        {{-- <p class="text-decoration-underline fs-2">Inicio</p> --}}
        <h1 class="display-2">Bienvenido al Herbario Virtual</h1>
        <p class="fs-5">Texto representativo para la primera diapositiva.</p>
      </div>
      <div id="caption-1" class="carousel-text text-wrap carousel-caption-custom" style="display: none;">
        {{-- <p class="text-decoration-underline fs-2">Especies</p> --}}
        <h1 class="display-2">Descubre la gran cantidad de especies</h1>
        <p class="fs-5">Texto representativo para la segunda diapositiva.</p>
      </div>
      <div id="caption-2" class="carousel-text text-wrap carousel-caption-custom" style="display: none;">
        {{-- <p class="text-decoration-underline fs-2">Acerca de</p> --}}
        <h1 class="display-2">Conoce más acerca de este proyecto</h1>
        <p class="fs-5">Texto representativo para la tercera diapositiva.</p>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-10">
        <h1 class="text-center pt-5 pb-3 display-3 border-bottom">Recurso global para plantas</h1>
        <article class="text-center fs-4">
          <p class="my-10">
            El Herbario del Instituto Tecnológico de Tlajomulco cuenta con aproximadamente 1500 especies de plantas distribuidas en 4000 ejemplares debidamente montadas y etiquetadas. 🌿
        </p>
        </article>
    </div>
</div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var carousel = document.getElementById('carouselId');
    carousel.addEventListener('slid.bs.carousel', function() {
      var activeItem = carousel.querySelector('.carousel-item.active');
      /* console.log("Elemento activo: ", activeItem); */
      var activeIndex = Array.from(carousel.querySelectorAll('.carousel-item')).indexOf(activeItem);
      var captions = document.querySelectorAll('.carousel-text');
      captions.forEach(function(caption) {
        caption.style.display = 'none';
      });
      var currentCaption = document.getElementById('caption-' + activeIndex);
      if (currentCaption) {
        /* console.log("Mostrando caption: " + activeIndex); */
        currentCaption.style.display = 'block';
      } else {
        console.log("No se encontró el caption: " + activeIndex);
      }
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