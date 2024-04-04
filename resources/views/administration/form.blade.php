<style>
    :root{
        --var-color-main: #2d572c;
        --var-color-links-primario: #2c7959;
        --var-color-links-secundario: #44b687;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color:  var(--var-color-main);
        color: #ffffff;
    }

    .card-header {
        background-color: var(--var-color-main);
        color: #fdfdfd;
        font-size: 20px;
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
        border-bottom: 3px solid var(--var-color-main);
    }

    /* modal */
    .modal-header {
        background-color: var(--var-color-main);
        color: #fffdfd;
        padding: 10px 15px;
        border-radius: 5px 5px 0 0;
    }
</style>
<div class="box box-info p-1">
    <div class="box-body">
        
        <div class="form-group fs-5">
            {{ Form::label('Nombre científico') }}
            {{ Form::text('scientific_name', $plantaFamilias->scientific_name, ['class' => 'form-control' . ($errors->has('scientific_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cientifico']) }}
            {!! $errors->first('scientific_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group fs-5">
            {{ Form::label('Nombre común') }}
            {{ Form::text('common_name', $plantaFamilias->common_name, ['class' => 'form-control' . ($errors->has('common_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Popular']) }}
            {!! $errors->first('common_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group fs-5">
            {{ Form::label('Descripción') }}
            {{ Form::textarea('description', $plantaFamilias->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group fs-5">
            {{ Form::label('Familia') }}
            {{ Form::select('family', $familias, $plantaFamilias->family, ['class' => 'form-control' . ($errors->has('family') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la familia, en caso de aplicar.', 'id' => 'family']) }}
            {!! $errors->first('family', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group fs-5">
            {{ Form::label('type', 'Tipo de planta') }}
            {{ Form::select('type', ['planta' => 'Planta', 'familia' => 'Familia'], $plantaFamilias->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'id' => 'type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group fs-5">
            {{ Form::label('image', 'Imagen') }} <br>
            {{ Form::file('image', ['class' => 'form-control-file pt-1 pb-3' . ($errors->has('image') ? ' is-invalid' : ''), 'id' => 'image']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    {{-- creamos el boton de cancelar para la vista editar --}}
    <div class="d-inline">
        <button type="submit" class="btn btn-primary fs-5">{{ __('Enviar') }}</button>
    </div>
    <div class="d-inline p-3">
        <a class="btn btn-danger fs-5" href="{{ route('admin.index') }}"> {{ __('Cancelar') }}</a>
    </div>
</div>
