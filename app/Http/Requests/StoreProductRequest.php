<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:55|unique:products,title',
            'quantity' => 'integer',
            'price' => 'numeric',
            'thumb_image' => 'string',
            'category_id' => 'integer',
            'sub_category_id' => 'integer',
            'discount_status' => 'boolean',
            'discount_price' => 'numeric',
            'description' => 'string|max:2000',
            'meta_keywords' => 'string|max:100',
            'meta_description' => 'string|max:200',
        ];
    }
}
