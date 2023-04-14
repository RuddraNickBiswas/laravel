<?php

namespace Database\Seeders;

use App\Models\WhyUsSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhyUsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WhyUsSection::insert([
            [
                'title' => 'Lorem Ipsum',
                'description' =>  'Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat',
            ],
            [
                'title' => 'Repellat Nihil',
                'description' =>  'Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest',
            ],
            [
                'title' => 'Ad ad velit qui',
                'description' =>  'Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis ',
            ],
        ]);
    }
}
