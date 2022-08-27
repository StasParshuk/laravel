@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <a class="btn--primary mb-3"  href="{{route("admin.products.index")}}">view and edit </a>
                    <a class="btn--primary " href="{{route("admin.products.create")}}">Create product</a>

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
