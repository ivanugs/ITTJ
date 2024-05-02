@extends('layouts.app')

@section('title', 'Crear registro | Herbario Virtual')

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title display-6">{{ __('Crear nuevo registro de planta o familia') }}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('administration.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
