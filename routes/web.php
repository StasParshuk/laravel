<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/test', function () {
    return view('indexx');
});

Route::get('/wishlist', function () {
    return view('wishlist');
})->name("wishlist");

Route::get('/cart', function () {
    return view('cart');
})->name("cart");

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


Route::get('shop/{product}', function (\App\Models\Product $product) {
    return view('shop.product', compact(["product"]));
})->name("shop.one");


Route::get('products/', [\App\Http\Controllers\Guest\ProductsController::class, "index"])->name("guest.index");






Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin'])->group(
    function () {Route::get('/dashboard', function () {return view('admin.dashboard', ['role' => 'Admin']);})->name('dashboard');

    Route::resource('products', \App\Http\Controllers\Admin\ProductsController::class)->except(['show']);

    Route::get('products', [\App\Http\Controllers\Admin\ProductsController::class, "index"])->name("products.index");
    Route::get('products/create', [\App\Http\Controllers\Admin\ProductsController::class, "create"])->name("products.create");
    Route::post('products', [\App\Http\Controllers\Admin\ProductsController::class, "store"])->name("products.store");

    Route::get('products/{product}', [\App\Http\Controllers\Admin\ProductsController::class, "show"])->name("products.show");
    Route::get('products/{product}/edit', [\App\Http\Controllers\Admin\ProductsController::class, "edit"])->name("products.edit");
    Route::patch('products/{product}', [\App\Http\Controllers\Admin\ProductsController::class, "update"])->name("products.update");
    Route::delete('products/{delete}', [\App\Http\Controllers\Admin\ProductsController::class, "destroy"])->name("products.destroy");

    Route::name("category")->group(function (){
        Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, "index"])->name(".index");
        Route::get('category/create', [\App\Http\Controllers\Admin\CategoryController::class, "create"])->name(".create");
        Route::post('category', [\App\Http\Controllers\Admin\CategoryController::class, "store"])->name(".store");

        Route::get('category/{product}', [\App\Http\Controllers\Admin\CategoryController::class, "show"])->name(".show");
        Route::get('category/{product}/edit', [\App\Http\Controllers\Admin\CategoryController::class, "edit"])->name(".edit");
        Route::patch('category/{product}', [\App\Http\Controllers\Admin\CategoryController::class, "update"])->name(".update");
        Route::delete('category/{delete}', [\App\Http\Controllers\Admin\CategoryController::class, "destroy"])->name(".destroy");}

    );

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware("auth")->name('home');
