@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <a class="btn--primary mb-3"  href="{{route("admin.products.index")}}">view products and edit </a>

                    <a class="btn--primary mb-3" href="{{route("admin.products.create")}}">Create product</a>

                    <a class="btn--primary mb-3"  href="{{route("admin.category.index")}}">view category and edit </a>

                    <a class="btn--primary mb-3" href="{{route("admin.category.create")}}">Create category</a>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are admin!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
