<?php

namespace App\Observers;

use App\Models\Product;
use App\Services\FileStorageService;

class ProductObserver
{

    public function updated(Product $product)
    {
        //
    }


    public function deleted(Product $product)
    {
        if ($product->images()->count() > 0){
            $product->images->each->delete();
        }
        FileStorageService::remove($product->thumbnail);
    }

}
