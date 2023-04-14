<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyUsSection extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'description',
        'visibility',
    ];
}
