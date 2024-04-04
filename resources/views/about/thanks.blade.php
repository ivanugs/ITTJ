@extends('layouts.plantilla')

@section('title', 'Agradecimientos')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <h1 class="text-center pt-3 pb-3 mb-4 h1 border-bottom fw-light">
                Agradecimientos Especiales
            </h1>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 d-flex justify-content-center">
            <img 
                style="width: 300px; height:600px; mask-image:linear-gradient(black 85%, transparent)" 
                src="{{asset('images/about/thanks.png')}}" 
                alt="imagen-planta-agradecimientos" 
            >
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <article>
                <ul id="especial_thanks" class="fs-5">
                    <li class="mb-4">Ing. Rafael Daniel Huerta</li>
                    <li class="mb-4">Lic. Mitssy Martínez Rosales</li>
                    <li class="mb-4">Lic. Alexia López Romo</li>
                    <li class="mb-4">Ing. Rubén Iruegas López</li>
                    <li class="mb-4">Lic. Evangelina Moran</li>
                    <li class="mb-4">Ma. De Jesús Hernández Cárdenas</li>
                    <li class="mb-4">Ana L. García Corralejo</li>
                    <li class="mb-4">Mónica Amezcua</li>
                    <li class="mb-4">Silvia E. Galán</li>
                    <li class="mb-4">Ing. Rodolfo Cortéz Iñiguez</li>
                    <li class="mb-4">M.A.E. José Luis Torres Rodríguez</li>
                    <li class="mb-4">M.S.C. Abel Ramírez Molina</li>
                </ul>
            </article>
        </div>
    </div>
</div>
@endsection
