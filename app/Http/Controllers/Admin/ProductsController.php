<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Services\FileStorageService;
use App\Services\ImagesService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Exception\PcreException;

class ProductsController extends Controller
{


    public function index()
    {
        $products = Product::with('category')->paginate(12);

        return view("admin.products.index", compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view("admin.products.create", compact("categories"));
    }

    public function store(CreateProductRequest $request)
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
            return redirect()->route("admin.products.index")->with('status', "The product #{$product->id} was successfully created!");
        } catch (Exception $exception) {
            DB::rollBack();
            logs()->warning($exception);

            return redirect()->back()->with("warn", "oops some wrong see logs");
        }


    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.products.edit', compact(["product", "categories"]));
    }

    public function update(Product $product, UpdateProductRequest $request)
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
            return redirect()->route("admin.products.index")->with('status', "The product #{$product->id} was successfully updated!");
        } catch (Exception $exception) {
            DB::rollBack();
            logs()->warning($exception);

            return redirect()->back()->with("alert", "oops some wrong see logs");
        }
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route("admin.products.index"));
    }

    public function show(Product $product)
    {

        return view('admin.products.show', compact(["product"]));
    }

}
