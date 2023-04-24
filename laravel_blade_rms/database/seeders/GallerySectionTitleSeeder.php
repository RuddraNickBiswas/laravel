<?php

namespace Database\Seeders;

use App\Models\GallerySectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GallerySectionTitle::insert([
           'title_first' => 'Some photos from', 
           'title_last' => 'Our Restaurant',
           'description' => 'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.',
        ]);
    }
}
