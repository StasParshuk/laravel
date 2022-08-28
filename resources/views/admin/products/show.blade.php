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

                                <div class="shop-details-top-buy-now-btn"><a href="{{route("admin.products.edit",$product)}}" class="btn--primary">
                                        Edit</a>
                                </div>
                                    <form action="{{route("admin.products.destroy",$product)}}" method="POST" >
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

        <section class="product pt-60 pb-120 wow fadeInUp overflow-hidden ">
            <div class="container ">
                <div class="row">
                    <div class="col-12 wow fadeInUp animated">
                        <ul class="nav product-details-nav nav-two nav-pills justify-content-center" id="pills-tab-two"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-description" type="button" role="tab"
                                        aria-controls="pills-description" aria-selected="true">
                                    Description
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-additional-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-additional" type="button" role="tab"
                                        aria-controls="pills-additional" aria-selected="false"> Additional
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-sizechart-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-sizechart" type="button" role="tab"
                                        aria-controls="pills-sizechart" aria-selected="false"> Size Chart
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-review" type="button" role="tab"
                                        aria-controls="pills-review" aria-selected="false"> Review
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row wow fadeInUp animated">
                    <div class="tab-content" id="pills-tabContent-two">
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                             aria-labelledby="pills-description-tab">
                            <div class="product-drescription">
                                <h4> Product Details:</h4>
                                <p> {{$product->description}} </p>
                                <div class="row align-items-center">
                                    <div class="col-lg-4 mt-30 ">
                                        <div class="thumb"><img
                                                src="assets/images/shop/shop-details-tab-content-specification-img-1.jpg"
                                                alt=""></div>
                                    </div>
                                    <div class="col-lg-8 mt-30">
                                        <h4>Specification:</h4>
                                        <ul class="drescription-list">
                                            <li> 1. Adipiscing hac cubilia, fermentum ipsum auctor parturient tempus
                                                lobortis fermentum.
                                            </li>
                                            <li> 2. Euismod disagree soler imperdiet vehicula pede eros ipsum cras mi
                                                feugiat.
                                            </li>
                                            <li> 3. Rhoncus consequat phasellus donec suspendisse scelerisque facilisis
                                                gravida porttitor turpis.
                                            </li>
                                            <li> 4. Consequat phasellus donec suspendisse scelerisque facilisis gravida
                                                porttitor turpis.
                                            </li>
                                            <li> 5. Consequat phasellus donec suspendisse scelerisque facilisis gravida
                                                porttitor
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-additional" role="tabpanel"
                             aria-labelledby="pills-additional-tab">
                            <div class="product-drescription">
                                <p class="pt-0"> Assertively conceptualize parallel process improvements through user
                                    friendly colighue to action items. Interactively antidos cultivate interdependent
                                    customer service without clicks-and-mortar e-services. Proactively cultivate go
                                    forward testing procedures with accurate quality vectors. Globally aiembrace ethical
                                    functionalities via empowered scenarios. Phosfluorescently restore highly efficient
                                    opportunities and client-focused infomediaries. Enthusiastically transition
                                    multidisciplinary outside the box thinking without premium networks. Progressive
                                    supply clicks-and-mortar human capital through enterprise-wide web services.
                                    Objectivey bester provide access to extensible processes better than more
                                    qulification dumber there stoaling through 24/365 solutions. </p>
                                <ul class="drescription-list">
                                    <li> 1. Adipiscing hac cubilia, fermentum ipsum auctor parturient tempus lobortis
                                        fermentum.
                                    </li>
                                    <li> 2. Euismod disagree soler imperdiet vehicula pede eros ipsum cras mi feugiat.
                                    </li>
                                    <li> 3. Rhoncus consequat phasellus donec suspendisse scelerisque facilisis gravida
                                        porttitor turpis.
                                    </li>
                                    <li> 4. Consequat phasellus donec suspendisse scelerisque facilisis gravida
                                        porttitor turpis.
                                    </li>
                                    <li> 5. Consequat phasellus donec suspendisse scelerisque facilisis gravida
                                        porttitor
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-sizechart" role="tabpanel"
                             aria-labelledby="pills-sizechart-tab">
                            <div class="product-drescription">
                                <div class="size-chirt">
                                    <h4>Size Guide</h4>
                                    <p class="pt-0"> Assertively conceptualize parallel process improvements through
                                        user friendly colighue to action items. </p>
                                    <div class="size-tabble">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th>Size</th>
                                                <th>XXS - XS</th>
                                                <th>XS - S</th>
                                                <th>S - M</th>
                                                <th>M - L</th>
                                                <th>L - XL</th>
                                                <th>XL - XXL</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>ARGENTINA</td>
                                                <td>7</td>
                                                <td>8</td>
                                                <td>9</td>
                                                <td>10</td>
                                                <td>11</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>BOLIVIA</td>
                                                <td>8</td>
                                                <td>9</td>
                                                <td>10</td>
                                                <td>11</td>
                                                <td>12</td>
                                                <td>13</td>
                                            </tr>
                                            <tr>
                                                <td>COLOMBIA</td>
                                                <td>26</td>
                                                <td>28</td>
                                                <td>30</td>
                                                <td>32</td>
                                                <td>34</td>
                                                <td>36</td>
                                            </tr>
                                            <tr>
                                                <td>China</td>
                                                <td>34</td>
                                                <td>36</td>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                                <td>44</td>
                                            </tr>
                                            <tr>
                                                <td>MEXICO</td>
                                                <td>32</td>
                                                <td>34</td>
                                                <td>36</td>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                            </tr>
                                            <tr>
                                                <td>JAMAICA</td>
                                                <td>40</td>
                                                <td>42</td>
                                                <td>44</td>
                                                <td>46</td>
                                                <td>48</td>
                                                <td>50</td>
                                            </tr>
                                            <tr>
                                                <td>MEXICO</td>
                                                <td>32</td>
                                                <td>34</td>
                                                <td>36</td>
                                                <td>38</td>
                                                <td>40</td>
                                                <td>42</td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>6</td>
                                                <td>8</td>
                                                <td>10</td>
                                                <td>12</td>
                                                <td>14</td>
                                                <td>16</td>
                                            </tr>
                                            <tr>
                                                <td>USA</td>
                                                <td>33</td>
                                                <td>44</td>
                                                <td>55</td>
                                                <td>66</td>
                                                <td>77</td>
                                                <td>88</td>
                                            </tr>
                                            <tr>
                                                <td>UK</td>
                                                <td>6</td>
                                                <td>8</td>
                                                <td>10</td>
                                                <td>12</td>
                                                <td>14</td>
                                                <td>16</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Pant</strong></td>
                                                <td>22-23</td>
                                                <td>24-25</td>
                                                <td>26-27</td>
                                                <td>28-29</td>
                                                <td>30-31</td>
                                                <td>32-33</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="product-drescription">
                                <div class="review-single pt-0 hed">
                                    <div class="ratting"><i class="flaticon-star-1"></i> <i class="flaticon-star-1"></i>
                                        <i class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i
                                            class="flaticon-star-1"></i> <span class="ps-2">BASED ON 100 REVIEW</span>
                                    </div>
                                </div>
                                <div class="review-single">
                                    <div class="left">
                                        <div class="ratting"><i class="flaticon-star-1"></i> <i
                                                class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i
                                                class="flaticon-star-1"></i> <i class="flaticon-star-1"></i></div>
                                        <h6>Vary Good quality Theme <span>Raul Bates on January 28, 2022</span></h6>
                                        <p> Assertively conceptualize parallel process improvements through user
                                            friendly colighue to action items. Interactively antidos cultivate
                                            interdependent customer service without clicks-and-mortar e-services. </p>
                                    </div>
                                    <a href="#0" class="right-box"> Report this Comments </a>
                                </div>
                                <div class="review-single">
                                    <div class="left">
                                        <div class="ratting"><i class="flaticon-star-1"></i> <i
                                                class="flaticon-star-1"></i> <i class="flaticon-star-1"></i> <i
                                                class="flaticon-star-1"></i> <i class="flaticon-star-1"></i></div>
                                        <h6> Amazing Theme <span>Kurt Morgan on January 28, 2022</span></h6>
                                        <p> Assertively conceptualize parallel process improvements through user
                                            friendly colighue to action items. Interactively antidos cultivate
                                            interdependent customer service without clicks-and-mortar e-services. </p>
                                    </div>
                                    <a href="#0" class="right-box">Report this Comments </a>
                                </div>
                                <div class="review-from-box mt-30">
                                    <h6>Write a Review</h6>
                                    <form action="#" class="review-from">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ratting-box">
                                                    <p> RATING </p>
                                                    <div class="ratting"><i class="flaticon-star-1"></i> <i
                                                            class="flaticon-star-1"></i> <i class="flaticon-star-1"></i>
                                                        <i class="flaticon-star-1"></i> <i class="flaticon-star-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"><label for="name">NAME</label> <input
                                                        type="text" id="name" class="form-control"
                                                        placeholder="David Warner"></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"><label for="number">Number</label> <input
                                                        type="text" id="number" class="form-control"
                                                        placeholder="Phone Number"></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"><label for="email"> Email </label> <input
                                                        type="text" id="email" class="form-control"
                                                        placeholder="support@gmail.com"></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group"><label for="namee"> REVIEW TITLE</label> <input
                                                        type="text" id="namee" class="form-control"
                                                        placeholder="Give your review title"></div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group m-0"><label for="email">BODY OF REVIEW (1500)
                                                    </label> <textarea
                                                        placeholder="Write Your Comments Here"></textarea></div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn--primary style2 ">Submit Review
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>

    </main>

@endsection
