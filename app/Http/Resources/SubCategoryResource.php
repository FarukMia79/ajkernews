<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            "id"=> $this->id,
            "category_id"=> $this->category_id,
            "category_name"=> $this->category->name,
            "name"=> $this->name,
            "slug"=> $this->slug,
            "status"=> $this->status,
            "created_at" => $this->created_at ? $this->created_at->format('d M Y') : '',
        ];
    }
}
