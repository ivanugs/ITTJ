@extends('layouts.app')

@section('template_title')
    Registros
@endsection

@section('content')
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            {{-- <span id="card_title" class="fs-4 fw-bold text-success"> --}}
                                {{ __('Registros de plantas y familias') }}
                            </span>
                            <div class="float-right">
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre Científico</th>
                                        <th>Nombre Popular</th>
                                        <th>Familia</th>
                                        <th>Tipo</th>
                                        <th>Imagen</th>
                                        <th>Fecha Publicación</th>
                                        <th>Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plantaFamilias as $item)
                                        <tr class="fs-5 fw-light">
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->scientific_name }}</td>
                                            <td>{{ $item->common_name }}</td>
                                            <td>{{ $item->family }}</td>
                                            <td>{{ $item->type }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm fs-6" onclick="showModal('{{ $item->image }}', '{{ $item->scientific_name }}','{{ $item->description }}')">
                                                    <i class="fa-solid fa-image"></i>
                                                    Vista previa
                                                </button>
                                            </td>
                                            <td>{{ $item->publication_date }}</td>
                                            <td>
                                                <form action="{{ route('admin.destroy',$item->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary fs-6" href="{{ route('admin.show',$item->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success fs-6" href="{{ route('admin.edit',$item->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm fs-6"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
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
<!-- Modal -->
<div class="modal fade" id="imagenModal" tabindex="-1" role="dialog" aria-labelledby="imagenModalLabel" aria-hidden="true">
    <!-- Tamaño del modal -->
    <div class="modal-dialog modal-xxl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imagenModalLabel">Imagen</h5>
                {{-- QUITE LA X del modal --}}
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <div class="row ">
                    <div class="col-md-6">
                        <!-- Imagen cargada dinámicamente -->
                        <img src="" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <h5>Descripción:</h5>
                        <p id="descripcion"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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