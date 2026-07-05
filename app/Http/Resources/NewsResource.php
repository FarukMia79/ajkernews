<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
            'sub_category_id' => $this->sub_category_id,
            'division_id' => $this->division_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'meta_description' => $this->meta_description,
            'image' => $this->image ? url($this->image) : null,
            'category' => $this->category->name ?? 'N/A', 
            'reporter_name' => $this->user->name ?? 'Unknown', 
            'reporter_image' => $this->user->image ? url($this->user->image) : 'https://ui-avatars.com/api/?name=' . $this->user->name,
            'status' => $this->status,
            'is_breaking' => $this->is_breaking,
            'is_slider' => $this->is_slider,
            'allow_comment' => $this->allow_comment,
            'created_at' => $this->created_at->format('d M Y'),
            'updated_at' => $this->updated_at->format('d M Y')
        ];
    }
}
