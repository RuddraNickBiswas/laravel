<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;


    public function userSkills(){
        return $this->hasMany(UserSkills::class);
    }
}
