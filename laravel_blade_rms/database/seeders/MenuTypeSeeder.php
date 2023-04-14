<?php

namespace Database\Seeders;

use App\Models\MenuType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuTypes = [
            ['name' => 'Starters'],
            ['name' => 'Salads'],
            ['name' => 'Specialty'],
        ];

        foreach ($menuTypes as $menuType) {
            MenuType::create($menuType);
        }
    }
}
