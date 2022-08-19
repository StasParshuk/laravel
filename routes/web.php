<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('/shop', function () {
    return view('shop.shop-grid');
})->name("shop-1");


Route::get('/shop/product', function () {
    return view('shop.product');
})->name("shop-one");

Route::get('/blog', function () {
    return view('blog.blog-many');
})->name("blog-many");

Route::get('/blog/1', function () {
    return view('blog.blog-one');
})->name("blog-one");




Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin'])->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard', ['role' => 'Admin']);
    })->name('dashboard');

    Route::resource('products', \App\Http\Controllers\Admin\ProductsController::class)->except(['show']);
});

        Auth::routes();

            Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware("auth")->name('home');

