<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserInformationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user' => [
                'id' => $this->user->id,
                'name' => $this->name,
                'username' => $this->username,
                'email' => $this->email,
                'bio' => $this->bio,
                'profile_photo' => $this->profile_photo,
                'type' => $this->type,
            ],
            'address' => $this->address,
            'social_media_link' => $this->social_media_link,
            'skills' => $this->skills,
        ];
    }
}
