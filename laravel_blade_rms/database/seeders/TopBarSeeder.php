<?php

namespace Database\Seeders;

use App\Models\TopBar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopBar::insert([
            'phone' => "+1 5589 55488 55",
            'open_hours' => "Mon-Sat: 11:00 AM - 23:00 PM",
        ]);
    }
}
