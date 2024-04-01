@extends('layouts.plantilla')

@section('title', 'Herbario Virtual | ITTJ')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center pt-3 pb-3 mb-4 h1 border-bottom fw-light">Lista de especies</h1>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                <div id="uib_sidebar_wrapper">
                    <button id="showSearchButton" class="btn btn-showSearchButton d-lg-none d-md-none d-sm-none" type="button" data-toggle="collapse" data-target="#uib_sidebar_collapse" aria-expanded="true" aria-controls="uib_sidebar_collapse">
                        <span class="va-table">
                            <span class="va-cell">Explora el catálogo</span>
                            <span class="va-cell text-end"><i class="fa fa-filter"></i></span>
                        </span>
                    </button>
                    <div id="uib_buscador" class="d-none d-lg-block">
                        <div class="form-group">
                            <i class="fa fa-search fa-fw"></i>
                            <input id="uib_buscador_input" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="form-control typeahead" name="query">
                        </div>
                        <ul id="show_list" tabindex="1" class="list-group"></ul>
                    </div>
                </div>
            </div>
            <script>
                // Espera a que el documento esté listo
                document.addEventListener("DOMContentLoaded", function() {
                    // Obtener el botón y el buscador
                    const showSearchButton = document.getElementById("showSearchButton");
                    const buscador = document.getElementById("uib_buscador");
            
                    // Agregar un controlador de eventos para el clic en el botón
                    showSearchButton.addEventListener("click", function() {
                        // Toggle (alternar) la clase 'd-none' del buscador
                        buscador.classList.toggle("d-none");
                    });
                });
            </script>  
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <nav class="mb-4">
                    <ul class="pagination pagination-custom justify-content-center flex-wrap">
                        @foreach (range('A', 'Z') as $letra)
                            <li class="page-item">
                                <a class="page-link" href="{{ route('plantas.letra', $letra) }}">{{ $letra }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                @foreach ($plantas as $item)
                <div class="link-planta mb-1 px-2">
                    <a target="_blank" href="{{ route('plantas.show', ['id' => $item->id, 'scientific_name' => $item->scientific_name]) }}">
                        <p class="fst-italic fw-light text-capitalize fs-5">{{$item->scientific_name}}</p>
                    </a>
                </div> 
                @endforeach
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/searchSpecies.js')}}" type="module"></script>
@endsection
