<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class WishlistController extends Controller
{
    public function add(Product $product)
    {
        auth()->user()->addToWish($product);
        Cart::instance("wishlist")->add($product->id,
            $product->title,
            1,
            $product->end_price)->associate($product);
        return redirect()->back()->with("success", "Product add to wishlist");
    }

    public function delete(Product $product)
    {
        $status = "danger";
        $massage = "dont delete product from wishlist";
        if ($cartItem = Cart::instance("wishlist")->content()->where("id", $product->id)?->first()) {
            auth()->user()->removeFromWish($product);
            Cart::instance("wishlist")->remove($cartItem->rowId);
            $status = "success";
            $massage = "Product delete from wishlist";

        }
        return redirect()->back()->with($status, $massage);
    }
}
