<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Científico') }}
            {{ Form::text('scientific_name', $plantaFamilia->scientific_name, ['class' => 'form-control' . ($errors->has('scientific_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cientifico']) }}
            {!! $errors->first('scientific_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Común') }}
            {{ Form::text('common_name', $plantaFamilia->common_name, ['class' => 'form-control' . ($errors->has('common_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Popular']) }}
            {!! $errors->first('common_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de publicación') }}
            {{ Form::text('publication_date', $plantaFamilia->publication_date, ['class' => 'form-control' . ($errors->has('publication_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Publicacion']) }}
            {!! $errors->first('publication_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!--esta es la vista origina
        <div class="form-group">
            {{ Form::label('image') }}
            {{ Form::text('image', $plantaFamilia->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        -->
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('description', $plantaFamilia->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('Familia') }}
            {{ Form::text('family', $plantaFamilia->family, ['class' => 'form-control' . ($errors->has('family') ? ' is-invalid' : ''), 'placeholder' => 'Id Familia']) }}
            {!! $errors->first('family', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de planta') }}
            {{ Form::text('type', $plantaFamilia->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-4 mb-4">
    {{ Form::label('image', 'Imagen') }}
    <input type="file" name="image" class="form-control-file{{ $errors->has('image') ? ' is-invalid' : '' }}" id="image">
    {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
</div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>