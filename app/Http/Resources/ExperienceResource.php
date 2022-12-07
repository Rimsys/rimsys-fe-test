<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ExperienceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'resume_id' => $this->resume_id,
            'job_title' => $this->job_title,
            'start_date' => $this->start_date->format('m/d/Y'),
            'end_date' => $this->end_date->format('m/d/Y'),
            'is_present' => $this->is_present,
            'description' => $this->description,
        ];
    }
}
