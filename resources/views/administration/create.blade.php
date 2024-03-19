@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Planta Familia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Planta Familia</span>
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
