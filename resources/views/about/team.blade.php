@extends('layouts.plantilla')

@section('title', 'Equipo')

@section('content')
<style>
    article {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    article div {
        text-align: center;
    }

    article img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    article div {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <h1 class="text-center pt-3 pb-3 h1 border-bottom fw-light mb-5">Participantes en el desarrollo del Proyecto</h1>
            <article class="mb-5">
                <div>
                    <img src="{{ asset('images/about/team/male-icon.png') }}" alt="Miembro del equipo 2">
                    <p class="fs-6">
                        <a style="color: #44b687" href="#">Ing. Rodolfo Cortez Iñiguez</a><br> 
                        Colaborador del Proyecto
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/about/team/wm01.png') }}" alt="Miembro del equipo 2">
                    <p class="fs-6">
                        <a style="color: #44b687" href="#">L.I. Abel Ramírez Molina</a><br> 
                        Colaborador del Proyecto
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/about/team/wm02.png') }}" alt="Miembro del equipo 2">
                    <p class="fs-6"> 
                        <a style="color: #44b687" href="#">M.C. José Luis Torres Rodríguez</a><br> 
                        Colaborador del Proyecto
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/about/team/wm03.png') }}" alt="Miembro del equipo 2">
                    <p class="fs-6">
                        <a style="color: #44b687" href="#">Dra. Irma López Muraira</a><br> 
                        Encargada del Herbario
                    </p>
                </div>
            </article>
            <article>
                <div>
                    <img src="{{ asset('images/about/team/ivan.jpg') }}" alt="Miembro del equipo 2">
                    <p class="fs-6">
                        <a style="color: #44b687" href="#">Ing. Iván Uriel González Segundo</a><br> 
                        Desarrollador del Proyecto
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/about/team/alonso.jpg') }}" alt="Miembro del equipo 2">
                    <p class="fs-6">
                        <a style="color: #44b687" href="#">Ing. José Alonso Figueroa Martínez</a><br> 
                        Desarrollador del Proyecto
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/about/team/lulu.jpg') }}" alt="Miembro del equipo 2">
                    <p class="fs-6">
                        <a style="color: #44b687" href="#">Ing. Maria de Lourdes Martìnez Ramos</a><br> 
                        Desarrollador del Proyecto
                    </p>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection