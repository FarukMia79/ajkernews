<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PollResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'question' => $this->question,
            'options' => $this->options ?? [],
            'total_votes' => collect($this->options ?? [])->sum('votes'),
            'start_date' => optional($this->start_date)->format('Y-m-d'),
            'end_date' => optional($this->end_date)->format('Y-m-d'),
            'status' => $this->status,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
            'reporter_name' => $this->user->name ?? null,
            'reporter_image' => $this->user && $this->user->image ? url($this->user->image) : null,
        ];
    }
}
