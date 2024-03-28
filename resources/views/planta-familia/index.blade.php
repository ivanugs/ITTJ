@extends('layouts.plantilla')

@section('title', 'Herbario Virtual | ITTJ')

@section('content')
    {{-- <a href="{{route('planta-familias.create')}}">Dar de alta nueva planta</a> --}}
    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">Nombre Cientifico</th>
                    <th scope="col">Nombre Comun</th>
                    <th scope="col">Familia</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Fecha de publicacion</th>
                    <th scope="col">Fecha de creacion</th>
                    <th scope="col">Fecha de actualizacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plantaFamilias as $item)
                    <tr class="">
                        <td scope="row"><a target="_blank" href="{{route('planta-familias.show', $item->id)}}">{{$item->scientific_name}}</a></td>
                        <td>{{$item->common_name}}</td>
                        <td>{{$item->family}}</td>
                        <td>{{$item->image}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->publication_date}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    {{$plantaFamilias->links()}}
@endsection
