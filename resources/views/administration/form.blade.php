<link href="{{ asset('css/edit.css') }}" rel="stylesheet">
<div class="box box-info padding-1">
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
            {{ Form::text('description', $plantaFamilias->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('Familia') }}
            {{ Form::text('family', $plantaFamilias->family, ['class' => 'form-control' . ($errors->has('family') ? ' is-invalid' : ''), 'placeholder' => 'Id Familia']) }}
            {!! $errors->first('family', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type', 'Tipo de planta') }}
            {{ Form::select('type', ['planta' => 'Planta', 'familia' => 'Familia'], $plantaFamilias->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : '')]) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>        

        <div class="form-group mt-4 mb-4">
    {{ Form::label('image', 'Imagen') }}
    <input type="file" name="image" class="form-control-file{{ $errors->has('image') ? ' is-invalid' : '' }}" id="image">
    {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
</div>

    </div>
    {{-- creamos el boton de cancelar para la vista editar --}}
    <div class="box-footer mt-20">
        <button type="submit" class="btn btn-primary mb-2">{{ __('Actualizar') }}</button>
    </div>
    <div class="float-left">
        <a class="btn btn-danger mt-2" href="{{ route('admin.index') }}"> {{ __('Cancelar') }}</a>
    </div>
    
</div>