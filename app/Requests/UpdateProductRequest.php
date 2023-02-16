<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:55|unique:products,title'.$this->id,
            'slug' => 'string|max:100',
            'category_id' => 'integer',
            'sub_category_id' => 'integer',
            'quantity' => 'integer|min:0',
            'price' => 'numeric|min:0',
            'thumb_image' => 'string',
            'discount_status' => 'boolean',
            'discount_price' => 'numeric|min:0',
            'description' => 'string|max:2000',
            'meta_keywords' => 'string|max:100',
            'meta_description' => 'string|max:200',
        ];
    }
}
