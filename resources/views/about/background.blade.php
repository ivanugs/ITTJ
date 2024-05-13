@extends('layouts.plantilla')

@section('title', 'Antecedentes del proyecto | Herbario Virtual')

@section('content')
<style>
    .mensaje__section{
        display: flex;
        flex-direction: column;
        gap: 20px;
        align-items: center;
    }
    #icon{
        font-size: 10rem;
        opacity: 30%;
    }

    .mensaje__contenido{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }

    .mensaje__title{
        font-size: 2rem;
        color: #646060
    }

    .mensaje__text{
        text-align: center;
        font-size: 1rem;
        color: #646060
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <h1 class="text-center pt-3 pb-3 mb-4 h1 border-bottom fw-light">Antecedentes del proyecto</h1>
            <article>
                <div class="mensaje__section">
                    <i id="icon" class="fa-solid fa-screwdriver-wrench"></i>
                    <div class="mensaje__contenido">
                        <p class="mensaje__title">Página en Construcción</p>
                        <p class="mensaje__text">¡Gracias por visitarnos! Estamos trabajando en esta página y pronto estará disponible con contenido interesante. Por favor, vuelva más tarde.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection