<?php

namespace App\Observers;

use App\Models\Product;
use App\Notifications\ProductUpdateNotification;
use App\Services\FileStorageService;

class ProductObserver
{

    public function updated(Product $product )
    {

        $oldCount = $product->getOriginal("in_stock");
        $oldPrice = $product->getOriginal("end_price");

        if (($oldCount <= 0 && $oldCount < $product->in_stock) || $oldPrice > $product->end_price) {
             $product->followers()->get()->each->notify(new ProductUpdateNotification($product));
        }

    }


    public function deleted(Product $product)
    {
        if ($product->images()->count() > 0) {
            $product->images->each->delete();
        }
        FileStorageService::remove($product->thumbnail);
    }

}
