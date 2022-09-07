@extends('layouts.main')

@section('content')




    <section class="categories-tab pt-60 pb-60 wow fadeInUp">
        <div class="container auto-container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav three nav-pills justify-content-center" id="pills-tab-two" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-best-sellers-tab" data-bs-toggle="pill" data-bs-target="#pills-best-sellers" type="button" role="tab" aria-controls="pills-best-sellers" aria-selected="true"> Best Sellers </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-new-arrivals-tab" data-bs-toggle="pill" data-bs-target="#pills-new-arrivals" type="button" role="tab" aria-controls="pills-new-arrivals" aria-selected="false"> New Arrivals </button>
                        </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link" id="pills-top-rated-tab" data-bs-toggle="pill" data-bs-target="#pills-top-rated" type="button" role="tab" aria-controls="pills-top-rated" aria-selected="false"> Top Rated </button> </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="tab-content" id="pills-tabContent-two">
                    <div class="tab-pane fade show active" id="pills-best-sellers" role="tabpanel" aria-labelledby="pills-best-sellers-tab">
                        <div class="catagory-slider-three">
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="https://picsum.photos/1000/1200" class="first-img" alt="">
                                            <img src="https://picsum.photos/1000/1200" alt="" class="hover-img">
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span> <span class="bg_black badge discount">-40%</span> </div> <a href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Apex Sneakers </a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="https://picsum.photos/1000/1200" alt="">
                                        </a>
                                        <a href="cart.html" class="addcart btn--primary style2">
                                            Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i>
                                                        <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Sports Shoes</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-new-arrivals" role="tabpanel" aria-labelledby="pills-new-arrivals-tab">
                        <div class="catagory-slider-three">
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="https://picsum.photos/1000/1200" class="first-img" alt="">
                                            <img src="https://picsum.photos/1000/1200" alt="" class="hover-img">
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span> <span class="bg_black badge discount">-40%</span> </div> <a href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Sport Sneakers</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="https://picsum.photos/1000/1200" alt="">
                                        </a>
                                        <a href="cart.html" class="addcart btn--primary style2">
                                            Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i>
                                                        <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Brown Office Shoe</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-top-rated" role="tabpanel" aria-labelledby="pills-top-rated-tab">
                        <div class="catagory-slider-three">
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="https://picsum.photos/1000/1200" class="first-img" alt="">
                                            <img src="https://picsum.photos/1000/1200" alt="" class="hover-img">
                                        </a>
                                        <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span> <span class="bg_black badge discount">-40%</span> </div> <a href="cart.html" class="addcart btn--primary style2"> Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="compare.html"> <i class="flaticon-left-and-right-arrows"></i> <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Sport Sneakers</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="products-three__inner">
                                <div class="products-three-single w-100">
                                    <div class="products-three-single-img">
                                        <a href="shop-details-3.html" class="d-block">
                                            <img src="https://picsum.photos/1000/1200" alt="">
                                        </a>
                                        <a href="cart.html" class="addcart btn--primary style2">
                                            Add To Cart </a>
                                        <div class="products-grid__usefull-links">
                                            <ul>
                                                <li><a href="wishlist.html"> <i class="flaticon-heart"> </i> <span>
                                                                wishlist</span> </a> </li>
                                                <li><a href="#0"> <i class="flaticon-left-and-right-arrows"></i>
                                                        <span>
                                                                compare</span> </a> </li>
                                                <li><a href="shop-details-3.html"> <i class="flaticon-visibility"></i> <span> quick
                                                                view</span> </a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products-three-single-content text-center"> <span>Men Shoes</span>
                                        <h5><a href="shop-details-3.html">Brown Office Shoe</a></h5>
                                        <p>$159.00</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="loder">
                        <div id="overlay" style="display:none;">
                            <div class="spinner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
