<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title For This Document -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Laravel</title>
    <!-- Favicon For This Document -->
    <link rel="shortcut icon" href="{{ asset("assets/images/logo/favicon-32x32.png")}}" type="image/x-icon">
    <!-- Bootstrap 5 Css -->
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.5.1.1.min.css")}}">
    <!-- Google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- FlatIcon Css -->
{{--    <link rel="stylesheet" href="{{ asset("assets/fonts/flaticon.css")}}">--}}

    <!-- Slick Slider Css -->


{{--    <!-- Slick Slider Css -->--}}
{{--    <link rel="stylesheet" href="{{ asset("assets/css/plugin/slick.css")}}">--}}
{{--    <!--  Ui Tabs Css -->--}}
{{--    <link rel="stylesheet" href="{{ asset("assets/css/plugin/jquery-ui.min.css")}}">--}}
{{--    <!-- Magnific-popup Css -->--}}
{{--    <link rel="stylesheet" href="{{ asset("assets/css/plugin/magnific-popup.css")}}">--}}
{{--    <!-- Nice Select Css -->--}}
{{--    <link rel="stylesheet" href="{{ asset("assets/css/plugin/nice-select.v1.0.css")}}">--}}
{{--    <!-- Animate Css -->--}}
{{--    <link rel="stylesheet" href="{{ asset("assets/css/plugin/animate.css")}}">--}}
{{--    <!-- Style Css -->--}}
{{--    <link rel="stylesheet" href="{{ asset("assets/css/style.css")}}">--}}


{{--    <link rel="stylesheet" href="{{ asset("build/assets/app.c090eeea.css")}}">--}}
{{--    <link rel="stylesheet" href="{{ asset("build/assets/flaticon.cf1ee0ee.css")}}">--}}
{{--    <link rel="stylesheet" href="{{ asset("build/assets/style.6577e428.css")}}">--}}


    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'public/assets/fonts/flaticon.scss',
    'public/assets/scss/style.scss' ])
</head>

<body class="shoe">
<!-- ==========Preloader========== -->
{{--    <div class="loader"><span>stas</span></div>--}}
<!-- ==========Preloader========== -->
<!--===scroll bottom to top===-->
<a href="#0" class="scrollToTop"><i class="flaticon-up-arrow "></i></a>
<!--===scroll bottom to top===-->

<!-- header-default start -->
<header class="header-style-3">

    <div class="menubox">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if(session('warn'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif



            <div class="d-lg-block d-none">
                <div class="row g-0 position-relative">
                    <div class="col-lg-3 d-flex align-items-center justify-content-center border-rit ">
                        <div class="logo"><a href="{{route("welcome")}}"> <img
                                    src="{{asset("assets/images/logo/logo.png")}} " alt=""> </a>
                        </div>
                    </div>
                    <div class="col-lg-9 g-0 p-0">
                        <div class="row g-0 holder">
                            <div class="col-12">
                                <div class="some-info">
                                    <p class="d-flex align-items-center"> <span class="icon"> <i
                                                class="flaticon-power"></i> </span> Welcome to stas Online Shop</p>
                                    <div class="right d-flex align-items-center ">

                                        <a href="{{route("login")}}"> </a>
                                        @csrf
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                       href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a class="" href="{{route("admin.dashboard")}}"
                                                   role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    {{ Auth::user()->name }}
                                                </a>


                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>

                                            </li>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-one"></div>
                        <div class="row g-0 holder">
                            <div class="col-12">
                                <div class="mega-menu-default mega-menu d-lg-block d-none">
                                    <div class=" d-flex align-items-center justify-content-between ">
                                        <nav>
                                            <ul
                                                class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                                <li class="dropdown-list"><a href="{{route("welcome")}}">
                                                        <span>Home</span> <span
                                                            class="menuarrow"> <i class=""></i>
                                                            </span> </a>

                                                </li>
                                                <li class="dropdown-list"><a href="{{route("guest.index")}}">
                                                        <span>Shop </span> <span
                                                            class="menuarrow"> <i class=""></i>
                                                            </span> </a>

                                                </li>
                                                <li class="dropdown-list megamenu "><a href="#0"> <span>Features
                                                            </span> <span class="menuarrow"> <i
                                                                class="flaticon-down-arrow"></i> </span> </a>
                                                    <div class="dropdown megamenu-dropdown">
                                                        <div class="row g-0">
                                                            <div class="col-xl-6 col-lg-7 megamenu-padding-one">
                                                                <div class="row g-0">
                                                                    <div class="col-lg-4">
                                                                        <div class="megamenu-box one">
                                                                            <h6>Home Pages</h6>
                                                                            <ul class="megamenu-list">
                                                                                <li><a href="{{route("welcome")}}">Home
                                                                                        Page
                                                                                        01</a></li>

                                                                                <li>
                                                                                    <a href="{{route("guest.index",1)}}">Product
                                                                                        Style
                                                                                        1 </a></li>

                                                                                <li><a href="{{route("contact")}}">Contact
                                                                                    </a></li>
                                                                                <li><a href="{{route("faq")}}">FAQ</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="megamenu-box one">
                                                                            <h6>Shop Pages</h6>
                                                                            <ul class="megamenu-list">
                                                                                <li>
                                                                                    <a href="{{route("guest.index",1)}}">Shop
                                                                                        Grid </a></li>


                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="megamenu-box four">
                                                                            <h6>Others Pages</h6>
                                                                            <ul class="megamenu-list">
                                                                                <li>
                                                                                    <a href="{{route("cart")}}">Cart </a>
                                                                                </li>
                                                                                <li><a href="compare.html">Compare
                                                                                    </a></li>
                                                                                <li><a href="{{route("wishlist")}}">Wishlist
                                                                                    </a></li>
                                                                                <li><a href="{{route("order-track")}}">Order
                                                                                        Track </a>
                                                                                </li>
                                                                                <li><a href="{{route("home")}}">My
                                                                                        Account </a>
                                                                                </li>
                                                                                <li><a href="{{route("blog-many")}}">Blog</a>
                                                                                </li>
                                                                                <li><a href="{{route("blog-one")}}">Blog
                                                                                        Single</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="{{route("login")}}">Login</a>
                                                                                </li>
                                                                                <li><a
                                                                                        href="{{route("register")}}">Register</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-list"><a href="{{route("blog-many")}}">
                                                        <span>Blogs </span> <span
                                                            class="menuarrow"> <i class="flaticon-down-arrow"></i>
                                                            </span> </a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{route("blog-many")}}">All Blog Posts</a></li>
                                                        <li><a href="{{route("blog-one")}}">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-list"><a href="#0"> <span>Pages </span> <span
                                                            class="menuarrow"> <i class="flaticon-down-arrow"></i>
                                                            </span> </a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{route("about")}}">About Us </a></li>
                                                        <li><a href="{{route("contact")}}">Contact</a></li>
                                                        <li><a href="{{route("faq")}}">FAQ</a></li>
                                                        <li><a href="{{route("order-track")}}">Order_Track</a></li>
                                                        <li><a href="{{route("home")}}">My_Account</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-list"><a href="{{route("contact")}}">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>


                                        <div class="right d-flex align-items-center justify-content-end">
                                            <ul class="main-menu__widge-box d-flex align-items-center ">
                                                <li class="d-lg-block d-none"><a href="{{route("home")}}"><i
                                                            class="flaticon-user"></i> </a></li>
                                                <li class="d-lg-block d-none"><a href="{{route("wishlist")}}"
                                                                                 class="number"><i
                                                            class="flaticon-heart"></i> <span
                                                            class="count">(2)</span> </a></li>
                                                <li class="cartm"><a href="{{route("cart")}}" class="number cart-icon">
                                                        <i
                                                            class="flaticon-shopping-cart"></i><span
                                                            class="count">(5)</span> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>


@yield("content")

<footer class="footer-default footer-3 ">
    <div class="footer-default__shap_1 position-absolute "><img
            src="{{asset("assets/images/shape/footer-shape-1.png")}} "
            alt=""></div>
    <!--Start Footer-->
    <div class="footer-default__main-footer position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                    <div class="footer-default__single-box">
                        <div class="company-info">
                            <div class="footer-title">
                                <h4> Office</h4>
                            </div>
                            <div class="text1">
                                <p>29 Holles Place, Dublin 2 D02 YY46</p>
                            </div>
                            <div class="text2">
                                <p>68 Jay Street, Suite 902 New Side <br> Brooklyn, NY 11201</p>
                            </div>
                            <div class="text3">
                                <p>New York, United States</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                    <div class="footer-default__single-box">
                        <div class="footer-title">
                            <h4> Useful Links </h4>
                        </div>
                        <ul class="footer-links">
                            <li><a href="{{route("home")}}">Account</a></li>
                            <li><a href="{{route("login")}}">Sign In</a></li>
                            <li><a href="{{route("cart")}}">View Cart</a></li>
                            <li><a href="{{route("wishlist")}}">My WishList</a></li>
                            <li><a href="compare.html">Compare Products</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                    <div class="footer-default__single-box">
                        <div class="footer-title">
                            <h4> Information </h4>
                        </div>
                        <ul class="footer-links">
                            <li><a href="{{route("about")}}">About us</a></li>
                            <li><a href="{{route("contact")}}">Contact Us </a></li>
                            <li><a href="{{route("faq")}}">Faq</a></li>
                            <li><a href="{{route("blog-many")}}">Latest Posts</a></li>
                            <li><a href="{{route("order-track")}}">Order Track</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                    <div class="footer-default__single-box">
                        <div class="footer-title">
                            <h4> Newsletter </h4>
                        </div>
                        <div class="footer-newsletter">
                            <p class="text">Enter your email to receive our latest updates about our products &
                                promotions. </p>
                            <form action="#0" class="footer-default__subscrib-form">
                                <div class="footer-input-box"><input type="email" placeholder="Email address"
                                                                     name="email">
                                    <button type="submit" class="subscribe_btn"> Subscribe
                                    </button>
                                </div>
                            </form>
                            <div class="newsletter-bottom d-flex align-items-center">
                                <div class="footer-title-box">
                                    <p>Follow Us:</p>
                                </div>
                                <div class="footer__medio-boxx  medio-boxx  d-flex align-items-center">
                                    <ul>
                                        <li><a href="https://www.facebook.com/" target="_blank" class="active"><i
                                                    class="flaticon-facebook-app-symbol"></i></a></li>
                                        <li><a href="https://www.youtube.com/" target="_blank"><i
                                                    class="flaticon-youtube"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="flaticon-twitter"
                                                                              target="_blank"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i class="flaticon-instagram"
                                                                                    target="_blank"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- footer-bottom Footer-->
    <div class="footer_bottom position-relative">
        <div class="container">
            <div class="footer_bottom_content">
                <div class="copyright wow fadeInUp animated">
                    <p>© 2022 <a href="{{route("welcome")}}">Karte.</a> All Rights Reserved.</p>
                </div>
                <div class="footer-payment wow fadeInUp animated">
                    <a href="#0"> <img src="{{asset("assets/images/home-four/method-1.jpg")}} " alt="payment"> </a>
                    <a href="#0"> <img src="{{asset("assets/images/home-four/method-2.jpg")}}" alt="payment"> </a>
                    <a href="#0"> <img src="{{asset("assets/images/home-four/method-3.jpg")}}" alt="payment"> </a>
                    <a href="#0"> <img src="{{asset("assets/images/home-four/method-4.jpg")}}" alt="payment"> </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--==== Js Scripts Start ====-->
<!-- Jquery v3.6.0 Js -->
<script src="{{ asset("assets/js/jqurey.v3.6.0.min.js")}}"></script> <!-- Popper v2.9.3 Js -->
<script src="{{ asset("assets/js/popper.v2.9.3.min.js")}}"></script> <!-- Bootstrap v5.1.1 js -->
<script src="{{ asset("assets/js/bootstrap.v5.1.1.min.js")}}"></script> <!-- jquery ui js -->
<script src="{{ asset("assets/js/plugin/jquery-ui.min.js")}}"></script> <!-- Parallax js -->
<script src="{{ asset("assets/js/plugin/jarallax.min.js")}}"></script> <!-- Isotope js -->
<script src="{{ asset("assets/js/plugin/isotope.js")}}"></script> <!-- Slick Slider Js -->
<script src="{{ asset("assets/js/plugin/slick.min.js")}}"></script> <!-- magnific-popup v2.3.4 Js -->
<script src="{{ asset("assets/js/plugin/jquery.magnific-popup.min.js")}}"></script> <!-- Tweenmax v2.3.4 Js -->
<script src="{{ asset("assets/js/plugin/tweenMax.min.js")}}"></script> <!-- Nice Select Js -->
<script src="{{ asset("assets/js/plugin/nice-select.v1.0.min.js")}}"></script> <!-- Wow js -->
<script src="{{ asset("assets/js/plugin/wow.v1.3.0.min.js")}}"></script> <!-- Wow js -->
<script src="{{ asset("assets/js/plugin/jquery.countdown.min.js")}}"></script> <!-- Main js -->
<script src="{{ asset("assets/js/main.js")}}"></script>
<!--==== Js Scripts End ====-->

<script src="{{ asset("build/assets/app.d6357cc5.js")}}"></script>
@stack("footer-scripts")
</body>

</html>
