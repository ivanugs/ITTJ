@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Planta Familia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar registro') }}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.update', $plantaFamilias->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            @csrf
                            @include('administration.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
