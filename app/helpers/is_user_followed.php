<?php
if (!function_exists("is_user_followed")){
    function is_user_followed(\App\Models\Product $product){
        return(bool) auth()->user()->wishies()->find($product->id);
    }
}
