<link href="{{ asset('css/edit.css') }}" rel="stylesheet">
<div class="box box-info p-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Científico') }}
            {{ Form::text('scientific_name', $plantaFamilias->scientific_name, ['class' => 'form-control' . ($errors->has('scientific_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cientifico']) }}
            {!! $errors->first('scientific_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Común') }}
            {{ Form::text('common_name', $plantaFamilias->common_name, ['class' => 'form-control' . ($errors->has('common_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Popular']) }}
            {!! $errors->first('common_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de publicación') }}
            {{ Form::date('publication_date', $plantaFamilias->publication_date, ['class' => 'form-control' . ($errors->has('publication_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Publicacion']) }}
            {!! $errors->first('publication_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::textarea('description', $plantaFamilias->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Familia') }}
            {{ Form::text('family', $plantaFamilias->family, ['class' => 'form-control' . ($errors->has('family') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la familia, en caso de aplicar.']) }}
            {!! $errors->first('family', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type', 'Tipo de planta') }}
            {{ Form::select('type', ['planta' => 'Planta', 'familia' => 'Familia'], $plantaFamilias->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : '')]) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
        <div class="form-group">
            {{ Form::label('image', 'Imagen') }} <br>
            {{ Form::file('image', ['class' => 'form-control-file pt-1 pb-3' . ($errors->has('image') ? ' is-invalid' : ''), 'id' => 'image']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    {{-- creamos el boton de cancelar para la vista editar --}}
    <div class="d-inline">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
    <div class="d-inline p-3">
        <a class="btn btn-danger" href="{{ route('admin.index') }}"> {{ __('Cancelar') }}</a>
    </div>
</div>