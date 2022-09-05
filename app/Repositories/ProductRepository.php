<?php

namespace App\Repositories;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryContract;
use App\Services\FileStorageService;
use App\Services\ImagesService;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\False_;

class ProductRepository implements ProductRepositoryContract
{

    /**
     * @param CreateProductRequest $request
     * @return Product
     */
    public function create(CreateProductRequest $request): Product|bool
    {
        try {
            DB::beginTransaction();
            $data = request()->validate($request->rules());
            if (!empty($data["images"])) {
                $images = $data["images"];
                unset($data["images"]);
            }

            if (!empty($data["thumbnail"])) {
                FileStorageService::upload($data["thumbnail"]);
            }

            $product = Product::create($data);

            ImagesService::attach($product, "images", $images);

            DB::commit();
            return $product;
        } catch (\Exception $exception) {
            DB::rollBack();
            logs()->warning($exception);
            return false;

        }
    }

    /**
     * @param Product $product
     * @param CreateProductRequest $request
     * @return Product
     */
    public function update(Product $product, UpdateProductRequest $request): Product
    {
        try {
            DB::beginTransaction();
            $data = request()->validate($request->rules());
            if (!empty($data["images"])) {
                $images = $data["images"];
                unset($data["images"]);
            }

            if (!empty($data["thumbnail"])) {
                FileStorageService::upload($data["thumbnail"]);
            }

            $product->update($data);
            if (!empty($images)) {
                ImagesService::attach($product, "images", $images);
            }


            DB::commit();
            return $product;

        } catch (Exception $exception) {
            DB::rollBack();
            logs()->warning($exception);


            return false;
        }
    }
}
