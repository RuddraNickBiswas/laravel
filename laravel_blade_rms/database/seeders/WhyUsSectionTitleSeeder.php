<?php

namespace Database\Seeders;

use App\Models\WhyUsSectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhyUsSectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WhyUsSectionTitle::insert([
           'title' => 'Why choose', 
           'title_colored' => 'Our Restaurant',
           'description' =>  'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.',
        ]);
    }
}
