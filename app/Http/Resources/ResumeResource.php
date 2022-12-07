<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResumeResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'location' => $this->location,
            'job_title' => $this->job_title,
            'portfolio_url' => $this->portfolio_url,
            'phone' => $this->phone,
            'about_me' => $this->about_me,
            'experiences' => ExperienceResource::collection(
                $this->experiences()->orderBy('start_date', 'desc')->get()
            ),
        ];
    }
}
