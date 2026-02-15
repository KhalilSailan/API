<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'customer' => $this->customer,
            'body' => $this->review,
            'star' => $this->star,
            'href' => [
                'link' => route('reviews.index',$this->id)
        ]
        ];
    }
}
