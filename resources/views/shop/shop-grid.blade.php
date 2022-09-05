@extends('layouts.main')

@section('content')

    <main class="overflow-hidden ">
        <!--Start Breadcrumb Style2-->
        <div class="breadcrumb-area" style="background-image: url(assets/images/inner-pages/breadcum-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content pb-60 text-center wow fadeInUp animated">
                            <h2>Shop Grid</h2>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html"><i class="flaticon-home pe-2"></i>Home</a></li>
                                    <li><i class="flaticon-next"></i></li>
                                    <li class="active">Shop Grid</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Breadcrumb Style2-->
        <!--Start Product Categories One-->
        <section class="product-categories-one pb-60">
            <div class="container">
                <div class="row wow fadeInUp animated">
                    <div class="col-xl-12">
                        <div class="product-categories-one__inner">
                            <ul>
                                @for($i = 1; $i <= 5; $i++)
                                <li><a href="#0" class="img-box">
                                        <div class="inner"><img src="https://picsum.photos/85"
                                                                alt=""></div>
                                    </a>
                                    <div class="title"><a href="#0">
                                            <h6>Accessories</h6>
                                        </a></div>
                                </li>
                                @endfor

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Product Categories One-->

        @dump($products)
        <!--Start product-grid-->
        <div class="product-grid pt-60 pb-120">
            <div class="container">
                <div class="row gx-4">
                    <div class="col-xl-3 col-lg-4">
                        <div class="shop-grid-sidebar">
                            <button class="remove-sidebar d-lg-none d-block"><i class="flaticon-cross"> </i></button>
                            <div class="sidebar-holder">
                                <form action="#0" class="footer-default__subscrib-form m-0 p-0 wow fadeInUp animated">
                                    <div class="footer-input-box p-0 "><input type="email" placeholder="Email address"
                                                                              name="email">
                                        <button type="submit" class="subscribe_btn"><i
                                                class="flaticon-magnifying-glass"></i></button>
                                    </div>
                                </form>
                                <div class="single-sidebar-box mt-30 wow fadeInUp animated ">
                                    <h4>Select Categories</h4>
                                    <div class="checkbox-item">
                                        <form>
                                            <div class="form-group"><input type="checkbox" id="bedroom"> <label
                                                    for="bedroom">Bedroom</label></div>
                                            <div class="form-group"><input type="checkbox" id="decoration"> <label
                                                    for="decoration">Decoration</label></div>
                                            <div class="form-group"><input type="checkbox" id="kitchen"> <label
                                                    for="kitchen">Kitchen</label></div>
                                            <div class="form-group"><input type="checkbox" id="clothing"> <label
                                                    for="clothing">Clothing</label></div>
                                            <div class="form-group"><input type="checkbox" id="office"> <label
                                                    for="office">Office</label></div>
                                            <div class="form-group m-0"><input type="checkbox" id="lighting"> <label
                                                    for="lighting">Lighting</label></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                                    <h4>Color Option </h4>
                                    <ul class="color-option">
                                        <li><a href="#0" class="color-option-single"> <span> Black</span> </a></li>
                                        <li><a href="#0" class="color-option-single bg2"> <span> Yellow</span> </a>
                                        </li>
                                        <li><a href="#0" class="color-option-single bg3"> <span> Red</span> </a></li>
                                        <li><a href="#0" class="color-option-single bg4"> <span> Blue</span> </a></li>
                                        <li><a href="#0" class="color-option-single bg5"> <span> Green</span> </a>
                                        </li>
                                        <li><a href="#0" class="color-option-single bg6"> <span> Olive</span> </a>
                                        </li>
                                        <li><a href="#0" class="color-option-single bg7"> <span> Lime</span> </a></li>
                                        <li><a href="#0" class="color-option-single bg8"> <span> Pink</span> </a></li>
                                        <li><a href="#0" class="color-option-single bg9"> <span> Cyan</span> </a></li>
                                        <li><a href="#0" class="color-option-single bg10"> <span> Magenta</span> </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                                    <h4>Filter By Price</h4>
                                    <div class="slider-box">
                                        <div id="price-range" class="slider"></div>
                                        <div class="output-price"><label for="priceRange">Price:</label> <input
                                                type="text" id="priceRange" readonly=""></div>
                                        <button class="filterbtn" type="submit"> Filter</button>
                                    </div>
                                </div>
                                <div class="single-sidebar-box mt-30 wow fadeInUp animated pb-0 border-bottom-0 ">
                                    <h4>Tags </h4>
                                    <ul class="popular-tag">
                                        <li><a href="#0">Tools</a></li>
                                        <li><a href="#0">Store</a></li>
                                        <li><a href="#0">Decoration</a></li>
                                        <li><a href="#0">Online</a></li>
                                        <li><a href="#0">Furnitures</a></li>
                                        <li><a href="#0">Beauty</a></li>
                                        <li><a href="#0">Fashion</a></li>
                                        <li><a href="#0">Office</a></li>
                                        <li><a href="#0">Clothing</a></li>
                                        <li><a href="#0">Interior</a></li>
                                        <li><a href="#0">Good</a></li>
                                        <li><a href="#0">Standard</a></li>
                                        <li><a href="#0">Chair’s</a></li>
                                        <li><a href="#0">Living Room</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="row">
                            <div class="col-xl-12">
                                <div
                                    class="shop-grid-page-top-info p-0 justify-content-md-between justify-content-center">
                                                <div>
                                                    <p class="small text-muted">
                                                        {!! __('Showing') !!}
                                                        <span class="fw-semibold">{{ $products->firstItem() }}</span>
                                                        {!! __('to') !!}
                                                        <span class="fw-semibold">{{ $products->lastItem() }}</span>
                                                        {!! __('of') !!}
                                                        <span class="fw-semibold">{{ $products->total() }}</span>
                                                        {!! __('results') !!}
                                                    </p>
                                                </div>
                                    <div
                                        class="right-box justify-content-md-between justify-content-center wow fadeInUp animated">
                                        <div class="short-by">
                                            <div class="select-box">
                                                <select class="wide">
                                                    <option data-display="Short by latest">Featured</option>
                                                    <option value="1">Best selling</option>
                                                    <option value="2">Alphabetically, A-Z</option>
                                                    <option value="3">Alphabetically, Z-A</option>
                                                    <option value="3">Price, low to high</option>
                                                    <option value="3">Price, high to low</option>
                                                    <option value="3">Date, old to new</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div
                                            class="product-view-style d-flex justify-content-md-between justify-content-center">
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-grid-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-grid"
                                                            type="button" role="tab" aria-selected="true">
                                                        <i class="flaticon-grid"></i>
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-list-tab" data-bs-toggle="pill"
                                                            data-bs-target="#pills-list" type="button" role="tab"
                                                            aria-selected="false">
                                                        <i class="flaticon-list"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                            <button class="slidebarfilter d-lg-none d-flex"><i
                                                    class="flaticon-edit"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                                         aria-labelledby="pills-grid-tab">


                                        <div class="row">


                                            @foreach($products->items() as $product)

                                                <div class="col-xl-4 col-lg-6 col-6 ">
                                                    <div class="products-three-single w-100  mt-30">
                                                        <div class="products-three-single-img"><a
                                                                href="{{route("shop.one",$product)}}"
                                                                class="d-block"> <img
                                                                    src="{{$product->thumbnailUrl ?? asset("assets/images/home-three/productss2-hover-1.png")}}"
                                                                    class="first-img" alt=""> <img
                                                                    src="https://picsum.photos/200"
                                                                    alt="" class="hover-img">
                                                            </a>
                                                            <div class="products-grid-one__badge-box"><span
                                                                    class="bg_base badge new ">New</span>
                                                            </div>
                                                            <a href="{{route("cart")}}"
                                                               class="addcart btn--primary style2">
                                                                Add To Cart </a>
                                                            <div class="products-grid__usefull-links">
                                                                <ul>
                                                                    <li><a href="{{route("wishlist")}}"> <i
                                                                                class="flaticon-heart">
                                                                            </i> <span>
wishlist</span> </a></li>
                                                                    <li><a href="{{route("compare")}}"> <i
                                                                                class="flaticon-left-and-right-arrows"></i>
                                                                            <span>
compare</span> </a></li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="products-three-single-content text-center"> <span>Men
                                                            Shoes</span>
                                                            <h5>
                                                                <a href="{{route("shop.one",$product)}}"> {{$product->title}} </a>
                                                            </h5>
                                                            <p>
                                                                <del>${{$product->price}}</del>
                                                                ${{round( $product->price - ($product->price / 100 *  $product->discount) )}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endforeach


                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="pills-list" role="tabpanel"
                                         aria-labelledby="pills-list-tab">
                                        <div class="row ">


                                            @foreach($products->items() as $product)

                                                <div class="col-12">
                                                    <div class="product-grid-two list mt-30">
                                                        <div class="product-grid-two__img">
                                                            <a href="{{route("shop.one",$product)}}" class="d-block">
                                                                <img src="{{asset("assets/images/home-three/products-2.jpg")}}"
                                                                     alt="">
                                                            </a></div>

                                                        <div class="product-grid-two-content text-center">
                                                            <span>Modern</span>
                                                            <h5>
                                                                <a href="{{route("shop.one",$product)}}">{{$product->title}} </a>
                                                            </h5>
                                                            <p>${{$product->price}}</p>
                                                            <p class="text">{{$product->description}} </p>
                                                            <div class="product-grid-two__overlay-box">
                                                                <div class="title">
                                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                                </div>
                                                                <div class="icon">
                                                                    <ul>

                                                                        <li><a href="wishlist.html"><i
                                                                                    class="flaticon-heart"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End product-grid-->
    </main>

@endsection
