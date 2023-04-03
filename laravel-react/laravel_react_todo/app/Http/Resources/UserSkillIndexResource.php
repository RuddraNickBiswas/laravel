<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserSkillIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
  public function toArray($request)
    {
        $userSkill = $this->resource;
        $skill = $userSkill->skill;

        if ($skill) {
            return [
                'id' => $userSkill->id,
                'skill_name' => $skill->skill_name,
                'skill_type' => $skill->skill_type,
                'progress' => $userSkill->progress,
            ];
        }
    }
}
