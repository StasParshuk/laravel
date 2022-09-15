<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name("welcome");


Route::get('/wishlist', function () {
    return view('wishlist');
})->name("wishlist");


Route::get('/about', function () {
    return view('abouts.about');
})->name("about");

Route::get('/contact', function () {
    return view('abouts.contact');
})->name("contact");

Route::get('/faq', function () {
    return view('abouts.faq');
})->name("faq");

Route::get('/order-track', function () {
    return view('abouts.order-track');
})->name("order-track");

Route::get('/blog', function () {
    return view('blog.index');
})->name("blog-many");

Route::get('/blog/1', function () {
    return view('blog.blog-one');
})->name("blog-one");

Route::get('/shop', function () {
    return view('shop.shop-grid');
})->name("compare");


Route::get('shop/{product}', [\App\Http\Controllers\Guest\ProductsController::class, "show"])->name("shop.one");


Route::get('products/', [\App\Http\Controllers\Guest\ProductsController::class, "index"])->name("guest.index");


Route::middleware('auth',)->group(function () {
    Route::post("product/{product}/add", [\App\Http\Controllers\Guest\ProductsController::class, "addRating"])->name("product.rating.add");
Route::get("wishlist/{product}/add",[\App\Http\Controllers\WishlistController::class,"add"])->name("wishlist.add");
Route::delete("wishlist/{product}/delete", [\App\Http\Controllers\WishlistController::class,"delete"])->name("wishlist.delete");
Route::post("order",\App\Http\Controllers\OrdersController::class)->name("order.create");

    Route::name("account.")->prefix("account")->group(function (){
        Route::get("/",[\App\Http\Controllers\Account\UsersController::class,"index"])->name("index");
        Route::get("{user}/edit",[\App\Http\Controllers\Account\UsersController::class,"edit"])->name("edit")->middleware("can:view,user");
        Route::put("{user}",[\App\Http\Controllers\Account\UsersController::class,"update"])->name("update")->middleware("can:update,user");;
        Route::get("/wishlist",\App\Http\Controllers\Account\WishlistController::class)->name("wishlist");
    });

});

Route::get('cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::post('cart/{product}', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::delete('cart', [\App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('cart/{product}/count', [\App\Http\Controllers\CartController::class, 'countUpdate'])->name('cart.count.update');
Route::get("cart/checkout",\App\Http\Controllers\CheckoutController::class)->name("cart.checkout");


Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin'])->group(
    function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard', ['role' => 'Admin']);
        })->name('dashboard');

        Route::resource('products', \App\Http\Controllers\Admin\ProductsController::class)->except(['show']);

        Route::get('products', [\App\Http\Controllers\Admin\ProductsController::class, "index"])->name("products.index");
        Route::get('products/create', [\App\Http\Controllers\Admin\ProductsController::class, "create"])->name("products.create");
        Route::post('products', [\App\Http\Controllers\Admin\ProductsController::class, "store"])->name("products.store");

        Route::get('products/{product}', [\App\Http\Controllers\Admin\ProductsController::class, "show"])->name("products.show");
        Route::get('products/{product}/edit', [\App\Http\Controllers\Admin\ProductsController::class, "edit"])->name("products.edit");
        Route::patch('products/{product}', [\App\Http\Controllers\Admin\ProductsController::class, "update"])->name("products.update");
        Route::delete('products/{delete}', [\App\Http\Controllers\Admin\ProductsController::class, "destroy"])->name("products.destroy");

        Route::name("category")->group(function () {
            Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, "index"])->name(".index");
            Route::get('category/create', [\App\Http\Controllers\Admin\CategoryController::class, "create"])->name(".create");
            Route::post('category', [\App\Http\Controllers\Admin\CategoryController::class, "store"])->name(".store");

            Route::get('category/{product}', [\App\Http\Controllers\Admin\CategoryController::class, "show"])->name(".show");
            Route::get('category/{product}/edit', [\App\Http\Controllers\Admin\CategoryController::class, "edit"])->name(".edit");
            Route::patch('category/{product}', [\App\Http\Controllers\Admin\CategoryController::class, "update"])->name(".update");
            Route::delete('category/{category}', [\App\Http\Controllers\Admin\CategoryController::class, "destroy"])->name(".destroy");
        }

        );

    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware("auth")->name('home');

Route::delete("ajax/images/{image}", \App\Http\Controllers\Ajax\RemoveImageController::class)->middleware("auth", "admin")->name("ajax.images.delete");


Route::prefix("paypal")->group(function(){
    Route::post("order/create",[\App\Http\Controllers\Payments\PaypalPaymentController::class,"create"]);
    Route::post("order/{orderId}/capture",[\App\Http\Controllers\Payments\PaypalPaymentController::class,"capture"]);
});

