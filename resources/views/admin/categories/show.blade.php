@extends('layouts.main')

@section('content')

    <main>
        <!--Start Shop Details Breadcrumb-->
        <div class="shop-details-breadcrumb wow fadeInUp animated overflow-hidden ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="shop-details-inner">
                            <ul class="shop-details-menu">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Shop Details 2</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Shop Details Breadcrumb-->
        <!--Start Shop Details Top-->
        <div class="shop-details-top">
            <div class="container">
                <div class="row mt--30">
                    <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated ">
                        <div class="single-product-box two">
                            <div class="product-slicknav single-product-two-nav slider-nav">
                                <div><span class="single-item"> <img
                                            src="{{asset("assets/images/home-two/products-v5-img1.jpg")}}"
                                            alt=""> </span></div>
                                <div><span class="single-item"> <img
                                            src="{{asset("assets/images/home-two/products-v5-img2.jpg")}}"
                                            alt=""> </span></div>


                            </div>
                            <div class="big-product single-product-two slider-for">
                                <div>
                                    <div class="single-item">
                                        <img src="{{asset("assets/images/home-two/products-v5-img1.jpg")}}" alt="">
                                        <div class="ptag"><span class="one">{{$product->discount}} off </span></div>
                                        <a href="#0" class="love"> <i class="flaticon-like"></i> </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">
                        <div class="shop-details-top-right two">
                            <div class="shop-details-top-right-content-box">
                                <div class="shop-details-top-title m-0">
                                    <h3>{{$product->title}}</h3>
                                </div>
                                <div class="shop-details-top-review-box">
                                    <div class="shop-details-top-review">
                                        <ul>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                        </ul>
                                        <p>(2 Reviews)</p>
                                    </div>
                                </div>
                                <ul class="shop-details-top-info">
                                    <li><span>SKU:</span> {{$product->SKU}}</li>
                                    <li><span>Vendor:</span> Flemeno</li>
                                </ul>
                                <div class="shop-details-top-price-box d-flex align-items-center flex-wrap ">
                                    <h3 class="pe-1">
                                        <del class="m-0 me-1">${{$product->price}}</del>
                                        ${{round( $product->price - ($product->price / 100 *  $product->discount) )}}
                                    </h3>
                                    <p>(+19% Vat Included)</p>
                                </div>
                                <div class="shop-details-top-color-sky-box">
                                    <h4>Color</h4>
                                    <ul class="varients">
                                        <li><a href="#0" class="shop-details-top-color-sky-img"
                                               data-src="assets/images/inner-pages/single-product-2.png"> <img
                                                    src="{{asset("assets/images/shop/shop-details-two-color-sky-img-1.jpg")}}"
                                                    alt=""> </a></li>
                                        <li><a href="#0" class="shop-details-top-color-sky-img"
                                               data-src="assets/images/inner-pages/single-product-3.png"> <img
                                                    src="{{asset("assets/images/shop/shop-details-two-color-sky-img-2.jpg")}}"
                                                    alt=""> </a></li>
                                        <li><a href="#0" class="shop-details-top-color-sky-img"
                                               data-src="assets/images/inner-pages/single-product-4.png"> <img
                                                    src="{{asset("assets/images/shop/shop-details-two-color-sky-img-3.jpg")}}"
                                                    alt=""> </a></li>
                                    </ul>
                                </div>
                                <p class="shop-details-top-product-sale"> 20 Products sold in last 12 hours </p>
                                <ul class="shop-details-top-ask-question">
                                    <li><a href="#0">
                                            <div class="icon"><i class="flaticon-left-and-right-arrows"></i></div>
                                            <div class="text">
                                                <p>Add to Compare</p>
                                            </div>
                                        </a></li>
                                    <li><a href="#0">
                                            <div class="icon"><i class="flaticon-chat-bubble"></i></div>
                                            <div class="text">
                                                <p>Ask Question</p>
                                            </div>
                                        </a></li>
                                </ul>
                                <div class="product-quantity m-0">
                                    <h4>Quantity</h4>
                                    <div class="product-quantity-box d-flex align-items-center flex-wrap">
                                        <div class="qty mr-2">
                                            <div class="qtySelector text-center"><span class="decreaseQty"><i
                                                        class="flaticon-minus"></i> </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"> <span
                                                    class="increaseQty"> <i class="flaticon-plus"></i> </span></div>
                                        </div>
                                        <div class="product-quantity-check"><i class="flaticon-select"></i>
                                            <p>Only {{$product->in_stock}} Left ! </p>
                                        </div>
                                    </div>
                                </div>
                                <p class="people-searce"> There are <span>50</span> peoples are cureently looking at
                                    this product </p>

                                <div class="shop-details-top-buy-now-btn"><a href="{{route("admin.category.edit",$product)}}" class="btn--primary">
                                        Edit</a>
                                </div>
                                    <form action="{{route("admin.category.destroy",$product)}}" method="POST" >
                                    @csrf
                                    @method("delete")
                                <div class="shop-details-top-buy-now-btn"> <button type="submit" class="btn--primary style2">{{ __('Delete1') }} </button></div>
                                </form>
                                <div class="shop-details-top-social-box">
                                    <p>Share:</p>
                                    <ul class="ps-1 social_link d-flex align-items-center">
                                        <li><a href="https://www.facebook.com/" target="_blank" class="active"><i
                                                    class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="flaticon-youtube"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="flaticon-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="flaticon-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="shop-details-top-safe-checkout">
                                    <h4 class="text-center">Guranteed Safe Checkout</h4>
                                    <ul class="shop-details-top-safe-checkout-list">
                                        <li>
                                            <div class="shop-details-top-safe-checkout-img"><a href="#0"><img
                                                        src="{{asset("assets/images/shop/shop-details-top-safe-checkout-img-3.jpg")}}"
                                                        alt=""></a></div>
                                        </li>
                                        <li>
                                            <div class="shop-details-top-safe-checkout-img"><a href="#0"><img
                                                        src="{{asset("assets/images/shop/shop-details-top-safe-checkout-img-4.jpg")}}"
                                                        alt=""></a></div>
                                        </li>
                                        <li>
                                            <div class="shop-details-top-safe-checkout-img"><a href="#0"><img
                                                        src="{{asset("assets/images/shop/shop-details-top-safe-checkout-img-5.jpg")}}"
                                                        alt=""></a></div>
                                        </li>
                                        <li>
                                            <div class="shop-details-top-safe-checkout-img"><a href="#0"><img
                                                        src="{{asset("assets/images/shop/shop-details-top-safe-checkout-img-6.jpg")}}"
                                                        alt=""></a></div>
                                        </li>
                                        <li>
                                            <div class="shop-details-top-safe-checkout-img"><a href="#0"><img
                                                        src="{{asset("assets/images/shop/shop-details-top-safe-checkout-img-7.jpg")}}"
                                                        alt=""></a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

@endsection
