@extends('layouts.app')

@section('template_title')
    Registros
@endsection

@section('content')
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
<style>
    .card {
        border: 1px solid #ccc;
        border-radius: 10px; 
        padding: 20px; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
        background-color:  #336132; 
        color: #ffffff; 
    }

    .card-header {
        background-color:#336132;
        color: #fdfdfd; 
        padding: 10px 15px; 
        border-bottom: 1px solid #ccc; 
        border-radius: 5px 5px 0 0; 

    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 8px; 
        text-align: left; 
    }

    .table th {
        background-color: #343a40; 
            color: #ffffff; 
    }

    .table td {
        border-bottom: 3px solid #336132; 
    }

    .modal-header {
        background-color:#336132;
        color: #fffdfd; 
        padding: 10px 15px; 
        border-radius: 5px 5px 0 0; 
    }

    .table-responsive {
        overflow-x: auto;
    }
</style>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-sm-10 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header mb-2">
                    <div class="display-6 d-flex justify-content-between align-items-center">
                        {{-- <span id="card_title" class="fs-4 fw-bold text-success"> --}}
                            {{ __('Registros de plantas y familias') }}
                        </span>
                        <div class="float-right">
                            @if (auth()->user()->hasRole('Admin'))
                            <a  href="{{ route('usuarios.index') }}" class="btn btn-primary btn-sm float-right fs-5 my-2">
                                <i class="fa-solid fa-user"></i>
                                {{ __('Registrar nuevo usuario') }}
                            </a>
                            @endif
                            <a href="{{ route('admin.create') }}" class="btn btn-primary btn-sm float-right fs-5"  data-placement="left">
                                <i class="fa-solid fa-plus"></i>
                                {{ __('Crear nuevo registro') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover fs-5">
                            <thead class="thead">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre científico</th>
                                    <th>Nombre popular</th>
                                    <th>Familia</th>
                                    <th>Tipo</th>
                                    <th>Imagen</th>
                                    <th>Fecha de actualización</th>
                                    <th>Operaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($plantaFamilias as $item)
                                    <tr class="fs-5 fw-light">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->scientific_name }}</td>
                                        <td>{{ $item->common_name }}</td>
                                        <td>{{ $item->familyName }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm fs-6" onclick="showModal('{{ $item->image }}', '{{ $item->scientific_name }}','{{ $item->description }}')">
                                                <i class="fa-solid fa-image"></i>
                                                Vista previa
                                            </button>
                                        </td>
                                        <td>{{ $item->updated_at }}</td>
                                        <td>
                                            <form class="d-sm-flex justify-content-around align-items-center" id="delete-form-{{ $item->id }}" action="{{ route('admin.destroy',$item->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary fs-6 my-1" href="{{ route('admin.show',$item->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                <a class="btn btn-sm btn-success fs-6 my-1" href="{{ route('admin.edit',$item->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm fs-6 my-1" onclick="confirmDelete('{{ $item->id }}')"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                            </form>
                                            {{-- Creamos la funcion de la alerta  de confimacion --}}
                                            <script>
                                                function confirmDelete(itemId) {
                                                    if (confirm("¿Estás seguro de que deseas eliminar este elemento?")) {
                                                        document.getElementById('delete-form-' + itemId).submit();
                                                    }
                                                }
                                            </script>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $plantaFamilias->links() !!}
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="imagenModal" tabindex="-1" role="dialog" aria-labelledby="imagenModalLabel" aria-hidden="true">
    <!-- Tamaño del modal -->
    <div class="modal-dialog modal-xxl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-4" id="imagenModalLabel">Imagen</h5>
            </div>
            <div class="modal-body">
                <div class="row ">
                    <div class="col-md-6">
                        <!-- Imagen cargada dinámicamente -->
                        <img src="" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <p class="fs-4">Descripción:</p>
                        <p class="fs-5" id="descripcion"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-danger fs-5" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script>
    function showModal(image, scientific_name, description) {
        var modal = $('#imagenModal');
        modal.find('.modal-body img').attr('src', "{{ asset('storage/') }}" + '/' + image);
        modal.find('.modal-title').text(scientific_name + ' - Imagen');
        modal.find('#descripcion').text(description);
        modal.modal('show');
    }
</script>
@endsection