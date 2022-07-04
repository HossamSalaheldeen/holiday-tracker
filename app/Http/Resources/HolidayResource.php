<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HolidayResource extends JsonResource
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
            'to' => $this->to,
            'from' => $this->from,
            'duration' => $this->duration,
            'comment' => $this->comment,
            'type' => $this->type->name,
            'user' => $this->user->name,
        ];
    }
}
