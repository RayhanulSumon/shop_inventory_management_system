<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SingleProductResource extends JsonResource
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
            'quantity' => $this->quantity,
            'price' => $this->price,
            'description' => $this->detail->description,
            'discount_status' => $this->discount_status,
            'discount_price' => $this->discount_price,
            'meta_keywords' => $this->detail->meta_keywords,
            'meta_description' => $this->detail->meta_description,
            'created_at' => $this->created_at->format( 'Y-m-d H:i:s'),
        ];
    }
}
