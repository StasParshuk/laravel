<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Models\Category;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Exception\PcreException;

class CategoryController extends Controller
{


    public function index()
    {
        $products = Category::paginate(12);

        return view("admin.categories.index", compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view("admin.categories.create", compact("categories"));
    }

    public function store(CreateCategoryRequest $request)
    {

            $data = request()->validate($request->rules());
           $product = Category::create($data);

            return redirect()->route("admin.category.index")->with('status', "The category #{$product->id} was successfully created!");




    }

    public function edit(Category $product)
    {

        return view('admin.categories.edit', compact(["product"]));
    }

    public function update(Category $product, CreateCategoryRequest $request)
    {
        $data = request()->validate($request->rules());
        $product->update($data);
        return redirect(route("admin.category.index"));
    }

    public function destroy(Category $product)
    {
        $product->delete();
        return redirect(route("admin.category.index"))->with('status', "The category  was successfully Deleted!");
    }

    public function show(Category $product)
    {

        return view('admin.categories.show', compact(["product"]));
    }

}
