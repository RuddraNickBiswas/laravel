<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItems extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'menu_type_id'];

    public function menuType()
    {
        return $this->belongsTo(MenuType::class);
    }
}
