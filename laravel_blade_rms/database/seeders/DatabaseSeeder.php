<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\EventSectionTitle;
use App\Models\MenuItems;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTableSeeder::class);
        $this->call(TopBarSeeder::class);
        $this->call(HeroSectionSeeder::class);
        $this->call(AboutSectionSeeder::class);


        $this->call(WhyUsSectionTitleSeeder::class);
        $this->call(WhyUsSectionSeeder::class);


        
        $this->call(MenuSectionTitleSeeder::class);

        $this->call(MenuTypeSeeder::class);
        $this->call(MenuItemsSeeder::class);
        

        $this->call(SpecialSectionTitleSeeder::class);
        $this->call(SpecialSectionSeeder::class);




        $this->call(EventSectionTitleSeeder::class);
        
    }
}
