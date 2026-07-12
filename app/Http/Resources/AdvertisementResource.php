<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdvertisementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'client_name' => $this->client_name,
            'target_url' => $this->target_url,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'placement' => $this->placement,
            'image' => $this->image ? url($this->image) : null,
            'status' => $this->status,
            'created_at' => $this->created_at ? $this->created_at->format('d M Y') : null,
            'updated_at' => $this->updated_at ? $this->updated_at->format('d M Y') : null,
        ];
    }
}
