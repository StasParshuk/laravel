@extends('layouts.main')

@section('content')

    <section class="login-page pt-120 pb-120 wow fadeInUp animated">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-9">
                    <div class="login-register-form"
                         style="background-image: url('{{asset( "assets/images/inner-pages/login-bg.png")}}');">
                        <div class="top-title text-center ">
                            <h2>Create Category</h2>
                        </div>
                        <form class="common-form " method="POST" enctype="multipart/form-data" action="{{ route('admin.category.store') }}">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <label for="name"
                                   class="col-md-4   align-content-center d-flex">{{ __('Name Category') }}</label>
                            <div class="form-group">
                                <input type="text" placeholder="name"
                                       class="form-control" name="name"
                                       value="{{old("Name Category")}}" required autofocus>
                            </div>



                            <label for="description"
                                   class="col-md-4   align-content-center d-flex">{{ __('Description') }}</label>
                            <div class="form-group">
                                <input type="text" placeholder="description"
                                       class="form-control" name="description"
                                       value="{{old("description")}}" required autofocus>
                            </div>



                            <label for="thumbnail"
                                   class="col-md-4   align-content-center d-flex">{{ __('thumbnail') }}</label>
                            <div class="mb-3">
                                <input type="file" placeholder="thumbnail"
                                       class="form-control"
                                       value="{{old("thumbnail")}}"  autofocus>
                            </div>


                            <button type="submit" class="btn--primary style2">{{ __('Create') }} </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
