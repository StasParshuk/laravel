@extends('layouts.main')

@section('content')

    <main class="overflow-hidden ">
        <!--Start Breadcrumb Style2-->
        <section class="breadcrumb-area" style="background-image: url(assets/images/inner-pages/breadcum-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content text-center wow fadeInUp animated">
                            <h2>Order Track</h2>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html"><i class="flaticon-home pe-2"></i>Home</a></li>
                                    <li> <i class="flaticon-next"></i> </li>
                                    <li class="active">Order Track</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Breadcrumb Style2-->
        <!--Start Order Track-->
        <div class="order-track pt-120 pb-120">
            <div class="container">
                <div class="inner">
                    <div class="text wow fadeInUp animated">
                        <p>To track your order please enter your Order ID in the box below and press the "Track" Button.
                            This was given to you on your receipt and in the confirmation email you should have
                            received.</p>
                    </div>
                    <form class="common-form wow fadeInUp animated">
                        <div class="form-group"> <label>Order ID*</label> <input type="text" class="form-control" placeholder="Enter your order number"> </div>
                        <div class="form-group"> <label>Billing Email*</label> <input type="email" class="form-control" placeholder="Email you used during checkout"> </div>
                        <div class="order-track-button"> <button type="submit" class="btn--primary style2">Track
                                Now</button> </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End Order Track-->
    </main>
@endsection

