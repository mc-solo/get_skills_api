<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
            'price' => $this->price,
            'level' => $this->level,
            'requirements' => $this->requirements,
            'video_url' => $this->video_url,
            'tags' => $this->tags,
            
            // Notes for Emmanuel: I added this line of code below to include details only if the instructor relationship is loaded
            'instructor' => $this->whenLoaded('instructor', function(){
                return [
                    'id' => $this->instructor->id,
                    'name' => $this->instructor->first_name . ' ' . $this->instructor->last_name,
                ];
            }),

            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
