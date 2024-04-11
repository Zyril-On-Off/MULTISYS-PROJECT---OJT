<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TodoListResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'task' => $this->task,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'subtodos' => SubtodoResource::collection($this->subtodos),
        ];
    }
}

