<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class SchoolsResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'   => $this->id,
            'name' => $this->name,
            'address' => $this->address,
            'city' => $this->city,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'type' => $this->type,
            'is_public' => $this->is_public,
            'school_zone' => $this->school_zone,
            'school_img_url' => $this->school_img_url,
            'created_at'    => $this->created_at->toDateString(),
        ];
    }
}
