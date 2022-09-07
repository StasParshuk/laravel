<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {

        $products = Product::with('category')->paginate(12);

        return view("shop.shop-grid",compact('products'));
    }

    public function create()
    {
        return view("admin/products/create");
    }



    public  function show(Product $product) {
$userRating = $product->getUserRating();
            return view('shop.product',compact("product","userRating"));
    }

    public function addRating(Request $request, Product $product)
    {
        $rating = $request->get("star");
        dd($product);

        $product->rateOnce($rating);

        return redirect()->back();
    }

}
