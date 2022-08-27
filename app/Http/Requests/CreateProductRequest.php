<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() && isAdmin(auth()->user());
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
                "title" => "required|string|unique:products|min:2",
                "description" => "required|string|min:2",
                "category_id" => "required|integer",
                "short_description" => "required|string|min:2",
                "SKU" => "unique:products|min:2",
                "price" => "integer",
                "discount" => "integer|min:0|max:99",
                "in_stock" => "integer|min:0",
                "thumbnail" => "min:2|image:jpeg,png",];
    }
}
