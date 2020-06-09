<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category->name,
            'author' => $this->author->name,
            'publisher' => $this->publisher->name,
            'stock' => $this->stock,
            'price' => $this->price,
            'image' => $this->image
        ];
    }
}
