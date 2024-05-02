@extends('layouts.app')

@section('title', 'Editar registro | Herbario Virtual')

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title display-6">{{ __('Editar registro') }}</span>
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
