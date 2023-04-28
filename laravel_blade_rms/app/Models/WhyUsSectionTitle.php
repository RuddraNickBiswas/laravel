<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyUsSectionTitle extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'title_colored',
        'description',
        'visibility',
    ];
}
