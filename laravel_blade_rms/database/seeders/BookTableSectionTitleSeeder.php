<?php

namespace Database\Seeders;

use App\Models\BookTableSectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookTableSectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          BookTableSectionTitle::insert([
           'title_first' => 'Book a', 
           'title_last' => 'Table',
           'description' => 'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.',
        ]);
    }
}
