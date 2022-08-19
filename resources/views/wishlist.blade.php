@extends('layouts.main')

@section('content')


    <main class="overflow-hidden">
        <!--Start Breadcrumb Style2-->
        <section class="breadcrumb-area" style="background-image: url(assets/images/inner-pages/breadcum-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-content text-center wow fadeInUp animated">
                            <h2>Wishlist</h2>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html"><i class="flaticon-home pe-2"></i>Home</a></li>
                                    <li> <i class="flaticon-next"></i> </li>
                                    <li class="active">Wishlist</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Breadcrumb Style2-->
        <!--Start Wishlist-->
        <section class="wishlist pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 wow fadeInUp animated">
                        <div class="wishlist-table-box">
                            <div class="wishlist-table-outer">
                                <table class="wishlist-table">
                                    <thead class="wishlist-header">
                                    <tr>
                                        <th>Image</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Stock Status</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="wishlist-thumb"> <img src="assets/images/shop/cart-product-thumb-1.jpg" alt=""> </div>
                                        </td>
                                        <td>
                                            <h5>Leather Bag </h5>
                                        </td>
                                        <td>
                                            <p class="price">$250.00</p>
                                        </td>
                                        <td>
                                            <p class="instock">In Stock</p>
                                        </td>
                                        <td class="add-to-cart-btn"> <a href="cart.html" class=" btn--primary style2 ">Add To Cart</a> </td>
                                        <td>
                                            <p class="sub-total">$500.00</p>
                                        </td>
                                        <td>
                                            <div class="remove"> <i class="flaticon-cross"></i> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="wishlist-thumb"> <img src="assets/images/shop/cart-product-thumb-2.jpg" alt=""> </div>
                                        </td>
                                        <td>
                                            <h5> Blue Headphone</h5>
                                        </td>
                                        <td>
                                            <p class="price">$250.00</p>
                                        </td>
                                        <td>
                                            <p class="instock">In Stock</p>
                                        </td>
                                        <td class="add-to-cart-btn"> <a href="cart.html" class="btn--primary style2 ">Add To Cart</a> </td>
                                        <td>
                                            <p class="sub-total">$500.00</p>
                                        </td>
                                        <td>
                                            <div class="remove"> <i class="flaticon-cross"></i> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="wishlist-thumb"> <img src="assets/images/shop/cart-product-thumb-3.jpg" alt=""> </div>
                                        </td>
                                        <td>
                                            <h5>Comport Chair</h5>
                                        </td>
                                        <td>
                                            <p class="price">$250.00</p>
                                        </td>
                                        <td>
                                            <p class="instock">In Stock</p>
                                        </td>
                                        <td class="add-to-cart-btn"> <a href="cart.html" class="btn--primary style2 ">Add To Cart</a> </td>
                                        <td>
                                            <p class="sub-total">$500.00</p>
                                        </td>
                                        <td>
                                            <div class="remove"> <i class="flaticon-cross"></i> </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Wishlist-->
    </main>


@endsection
