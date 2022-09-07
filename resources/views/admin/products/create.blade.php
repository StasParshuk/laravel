@extends('layouts.main')

@section('content')

    <section class="login-page pt-120 pb-120 wow fadeInUp animated">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-9">
                    <div class="login-register-form"
                         style="background-image: url('{{asset( "assets/images/inner-pages/login-bg.png")}}');">
                        <div class="top-title text-center ">
                            <h2>create product</h2>
                        </div>
                        <form class="common-form " method="POST" enctype="multipart/form-data" action="{{ route('admin.products.store') }}">
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

                            <label for="title"
                                   class="col-md-4   align-content-center d-flex">{{ __('TITLE') }}</label>
                            <div class="form-group">
                                <input type="text" placeholder="title"
                                       class="form-control" name="title"
                                       value="{{old("title")}}" required autofocus>
                            </div>

                            <label for="title"
                                   class="col-md-4   align-content-center d-flex">{{ __('Category') }}</label>
                            <div class="form-group">
                                <select class="form-select" type=""  aria-label="Default select example" name="category_id">
                                    <option selected value="{{old("category_id")}}">{{$categories[old("category_id")]->name?? "select value"}}</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="description"
                                   class="col-md-4   align-content-center d-flex">{{ __('Description') }}</label>
                            <div class="form-group">
                                <input type="text" placeholder="description"
                                       class="form-control" name="description"
                                       value="{{old("description")}}" required autofocus>
                            </div>

                            <label for="short_description"
                                   class="col-md-4   align-content-center d-flex">{{ __('Short Description') }}</label>
                            <div class="form-group">
                                <input type="text" placeholder="short_description"
                                       class="form-control" name="short_description"
                                       value="{{old("short_description")}}" required autofocus>
                            </div>

                            <label for="SKU"
                                   class="col-md-4   align-content-center d-flex">{{ __('SKU') }}</label>
                            <div class="form-group">
                                <input type="text" placeholder="SKU"
                                       class="form-control" name="SKU"
                                       value="{{old("SKU")}}" required autofocus>
                            </div>

                            <label for="price"
                                   class="col-md-4   align-content-center d-flex">{{ __('price') }}</label>
                            <div class="form-group">
                                <input type="number" placeholder="price"
                                       class="form-control" name="price"
                                       value="{{old("price")}}" required autofocus>
                            </div>

                            <label for="discount"
                                   class="col-md-4   align-content-center d-flex">{{ __('discount') }}</label>
                            <div class="form-group">
                                <input type="number" placeholder="discount"
                                       class="form-control" name="discount"
                                       value="{{old("discount")}}" required autofocus max="100">
                            </div>

                            <label for="in_stock"
                                   class="col-md-4   align-content-center d-flex">{{ __('in stock') }}</label>
                            <div class="form-group">
                                <input type="number" placeholder="in_stock"
                                       class="form-control" name="in_stock"
                                       value="{{old("in_stock")}}" required autofocus min="0">
                            </div>

                            <label for="thumbnail"
                                   class="col-md-4   align-content-center d-flex">{{ __('thumbnail') }}</label>
                            <div class="mb-3">
                                <input type="file" placeholder="thumbnail"
                                       class="form-control" name="thumbnail"
                                       value="{{old("thumbnail")}}" required autofocus >
                            </div>
                            <label for="thumbnail"
                                   class="col-md-4   align-content-center d-flex">{{ __('thumbnail') }}</label>
                            <div class="form-group row">
                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row images-wrapper popup-product-main-image-box"></div>
                                        </div>
                                        <div  class="form-control ">
                                            <input  value="{{old("images[]")}}" type="file" name="images[]" id="images" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn--primary style2">{{ __('Create') }} </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push("footer-scripts")
    @vite(["resources/js/images-preview.js"])
@endpush
