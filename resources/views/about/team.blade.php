@extends('layouts.plantilla')

@section('title', 'Equipo')

@section('content')
<link href="{{ asset('css/team.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center pt-5 pb-3 h1">Participantes en el desarrollo del Proyecto
            </h1>
            <article>
                {{-- aqui empiezas a poner todo --}}
                <div>
                    <img src="{{ asset('images/team/male-icon.png') }}" alt="Miembro del equipo 2">
                    <p>
                        <a href="#">Ing. Rodolfo Cortez Iñiguez</a><br> 
                        Colaborador del Proyecto
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/team/wm01.png') }}" alt="Miembro del equipo 2">
                    <p>
                        <a href="#">L.I. Abel Ramírez Molina</a><br> 
                        Colaborador de Proyecto
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/team/wm02.png') }}" alt="Miembro del equipo 2">
                    <p> 
                        <a href="#">M.C. José Luis Torres Rodríguez</a><br> 
                        Colaborador de Proyecto
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/team/wm03.png') }}" alt="Miembro del equipo 2">
                    <p>
                        <a href="#">Dra. Irma López Muraira</a><br> 
                        Encargada del Herbario
                    </p>
                </div>

            </article>
        </div>
    </div>
</div>
@endsection