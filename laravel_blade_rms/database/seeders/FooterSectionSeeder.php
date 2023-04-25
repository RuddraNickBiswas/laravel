<?php

namespace Database\Seeders;

use App\Models\FooterSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FooterSection::insert([
            'title' => 'Delicious',
            'description' => 'Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat. ',
            'twitter' => 'https://twitter.com/',
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/',
            'skype' => 'https://www.skype.com/',
            'linkedin' => 'https://www.linkedin.com/',  
            'cr_title' => 'Copyright Delicious. All Rights Reserved ',
            'cr_by' => 'RuddraNickBiwas',
        ]);
    }
}

