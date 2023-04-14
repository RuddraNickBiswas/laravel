<?php

namespace Database\Seeders;

use App\Models\EventSectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       EventSectionTitle::insert([
           'title_first' => 'Organize Your', 
           'title_middle' => 'Events',
           'title_last' => 'Events',
        ]);
    }
}
