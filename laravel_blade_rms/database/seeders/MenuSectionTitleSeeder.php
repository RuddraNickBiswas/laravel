<?php

namespace Database\Seeders;

use App\Models\MenuSectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuSectionTitle::insert([
           'title' => 'Check our tasty', 
           'title_colored' => 'Menu',
        ]);
    }
}
