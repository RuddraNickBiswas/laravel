<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuType extends Model
{
    use HasFactory;

   protected $fillable = ['name' ,'visibility'];

    public function menuItems()
    {
        return $this->hasMany(MenuItems::class);
    }
}
