@extends('layouts.main')

@section('content')

    <section class="login-page pt-120 pb-120 wow fadeInUp animated">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-9">
                    <div class="login-register-form"
                         style="background-image: url('{{asset( "assets/images/inner-pages/login-bg.png")}}');">
                        <div class="top-title text-center ">
                            <h2>Edit product</h2>
                        </div>
                        <form class="common-form " method="POST" enctype="multipart/form-data" action="{{ route('admin.products.update',$product->id) }}">
                            @csrf
                            @method("patch")
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
                                       value="{{$product->title}}" required autofocus>
                            </div>
                            <label for="title"
                                   class="col-md-4   align-content-center d-flex">{{ __('Category') }}</label>
                            <div class="form-group">
                                <select class="form-select" type="" aria-label="Default select example" name="category_id" >
                                    <option selected value="{{$product->category_id}}">{{$categories[$product->category_id-1]->name}}</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label for="description"
                                   class="col-md-4   align-content-center d-flex">{{ __('Description') }}</label>
                            <div class="form-group">
                                <textarea type="text" placeholder="description"
                                       class="form-control" name="description"
                                        required autofocus> {{$product->description}}</textarea>
                            </div>

                            <label for="short_description"
                                   class="col-md-4   align-content-center d-flex">{{ __('Short Description') }}</label>
                            <div class="form-group">
                                <input type="text" placeholder="short_description"
                                       class="form-control" name="short_description"
                                       value="{{$product->short_description}}" required autofocus>
                            </div>

                            <label for="SKU"
                                   class="col-md-4   align-content-center d-flex">{{ __('SKU') }}</label>
                            <div class="form-group">
                                <input type="text" placeholder="SKU"
                                       class="form-control" name="SKU"
                                       value="{{$product->SKU}}" required autofocus>
                            </div>

                            <label for="price"
                                   class="col-md-4   align-content-center d-flex">{{ __('price') }}</label>
                            <div class="form-group">
                                <input type="number" placeholder="price"
                                       class="form-control" name="price"
                                       value="{{$product->price}}" required autofocus>
                            </div>

                            <label for="discount"
                                   class="col-md-4   align-content-center d-flex">{{ __('discount') }}</label>
                            <div class="form-group">
                                <input type="number" placeholder="discount"
                                       class="form-control" name="discount"
                                       value="{{$product->discount}}" required autofocus max="100">
                            </div>

                            <label for="in_stock"
                                   class="col-md-4   align-content-center d-flex">{{ __('in stock') }}</label>
                            <div class="form-group">
                                <input type="number" placeholder="in_stock"
                                       class="form-control" name="in_stock"
                                       value="{{$product->in_stock}}" required autofocus min="0">
                            </div>





                            <div class="form-group ">
                                <label for="thumbnail"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Thumbnail') }}</label>
                                <div class="col-md-12">
                                    <div class="">
                                        <div class="col-md-12">
                                            <img src="{{ $product->thumbnailUrl  }}" style="height: 350px" id="thumbnail-preview" alt="">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="file" name="thumbnail" id="thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="images" class="col-md-4 col-form-label text-md-right">{{ __('Images') }}</label>
                                <div class="col-md-12">
                                    <div class="">
                                        <div class="col-md-12">
                                            <div class="row images-wrapper">
                                                @foreach($product->images as $image)
                                                    @if(Storage::has($image->path))
                                                        <div class="col-sm-12 d-flex justify-content-center align-items-center">
                                                            <img src="{{ $image->url }}" class="card-img-top" style="max-width: 80%; margin: 0 auto; display: block;">
                                                            <a data-route="{{ route('ajax.images.delete', $image->id) }}"
                                                               class="btn btn-danger remove-product-image">x</a>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="file" name="images[]" id="images" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn--primary style2">{{ __('edit') }} </button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection

@push("footer-scripts")
    @vite(["resources/js/images-preview.js","resources/js/images-actions.js"])
@endpush

