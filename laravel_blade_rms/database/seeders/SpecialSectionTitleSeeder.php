<?php

namespace Database\Seeders;

use App\Models\SpecialSectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialSectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         SpecialSectionTitle::insert([
           'title_first' => 'Check our', 
           'title_last' => 'Specials',
           'description' => 'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.',
        ]);
    }
}
