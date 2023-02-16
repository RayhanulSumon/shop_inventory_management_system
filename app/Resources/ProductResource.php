<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category_id' => $this->category_id,
            'sub_category_id' => $this->sub_category_id,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'thumb_image' => $this->thumb_image,
            'discount_status' => $this->discount_status,
            'discount_price' => $this->discount_price,
            'meta_keywords' => $this->meta_keywords,
            'meta_description' => $this->meta_description,
            'created_at' => $this->created_at->format( 'Y-m-d H:i:s'),
        ];
    }
}
