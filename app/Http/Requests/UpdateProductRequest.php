<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\Types\Nullable;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return isAdmin(auth()->user());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return
            [
                "title" => "required|string|min:2",
                "description" => "required|string|min:2",
                "category_id" => "required|integer",
                "short_description" => "required|string|min:2",
                "SKU" => "min:2",
                "price" => "integer",
                "discount" => "integer|min:0|max:99",
                "in_stock" => "integer|min:0",
                "thumbnail" => "nullable|image:jpeg,png",
                "images.*"=> "nullable|image:jpeg,png"];
    }
}
