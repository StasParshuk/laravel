@extends('layouts.main')

@section('content')

    <main class="overflow-hidden ">
        <!--Start Breadcrumb Style2-->
        <section class="breadcrumb-area" style="background-image: url(assets/images/inner-pages/breadcum-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content text-center wow fadeInUp animated">
                            <h2>Cart</h2>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html"><i class="flaticon-home pe-2"></i>Home</a></li>
                                    <li> <i class="flaticon-next"></i> </li>
                                    <li class="active">Cart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Breadcrumb Style2-->
        <!--Start cart area-->



        <section class="cart-area pt-120 pb-120">
            <div class="container">
                <div class="row wow fadeInUp animated">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="cart-table-box">
                            <div class="table-outer">
                                @if(Cart::instance('cart')->count() > 0)




                                <table class="cart-table">
                                    <thead class="cart-header">
                                    <tr>
                                        <th class="">Product Name</th>
                                        <th class="price">Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                        <th class="hide-me"></th>
                                    </tr>
                                    </thead>


                                    @each('cart.parts.product_view', Cart::instance('cart')->content(), 'row')



                                </table>



                                @else
                                    <h3 class="text-center">There are no products in cart</h3>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cart-button-box" style="justify-content: flex-end">
                            <div style="justify-content: flex-end" class="cart-button-box-right wow fadeInUp animated flex-col-reverse">
                                <form action="{{route("guest.index")}}" method="get">
                                <button  class="btn--primary mt-30" type="submit">Continue Shopping</button>
                                </form>
                                <button class="btn--primary mt-30" type="submit">Update Cart</button> </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-120">
                    <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
                        <div class="cart-total-box">
                            <div class="inner-title">
                                <h3>Cart Totals</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt--30">



                    <div class="col-xl-6 col-lg-5 wow fadeInUp animated">
                        <div class="cart-check-out mt-30">
                            <h3>Check Out</h3>
                            <ul class="cart-check-out-list">
                                <li>
                                    <div class="left">
                                        <p>Subtotal</p>
                                    </div>
                                    <div class="right">
                                        <p>${{ Cart::subtotal() }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p>Tax</p>
                                    </div>
                                    <div class="right">
                                        <p><span></span> ${{ Cart::tax() }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p>Total Price:</p>
                                    </div>
                                    <div class="right">
                                        <p>${{ Cart::total() }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @auth
                <div class="col-md-12 text-right">
                    {{--                        <a href="{{ route('checkout') }}" class="btn btn-outline-success">{{ __('Proceed to checkout') }}</a>--}}
                </div>
            @endauth

        </section>
        <!--End cart area-->
    </main>


@endsection
