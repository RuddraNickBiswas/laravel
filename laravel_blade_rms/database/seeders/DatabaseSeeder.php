<?php

namespace Database\Seeders;

use App\Http\Controllers\FooterSectionController;
use App\Models\BookTable;
use App\Models\Chefs;
use App\Models\ContactMessage;
use App\Models\ContactSectionTitle;
use App\Models\Testimonial;
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
        $this->call(EventSectionSeeder::class);



        $this->call(BookTableSectionTitleSeeder::class);
        BookTable::factory()->count(10)->create();




        $this->call(GallerySectionTitleSeeder::class);
        $this->call(GallerySectionSeeder::class);



        $this->call(ChefsSectionTitleSeeder::class);
        $this->call(ChefsSeeder::class);



        $this->call(TestimonialSeeder::class);



        $this->call(ContactSectionTitleSeeder::class);
        $this->call(ContactSectionSeeder::class);
        ContactMessage::factory()->count(10)->create();




        $this->call(FooterSectionSeeder::class);
    }
}
