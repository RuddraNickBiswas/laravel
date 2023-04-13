<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
      public function run(): void
    {
        $heroSections = [
            [
                'title' => "Delicious Restaurant",
                'description' => "Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.",
                'bg_image' => "frontend/assets/img/slide/slide-1.jpg",
            ],
            [
                'title' => "Lorem Ipsum Dolor",
                'description' => "Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.",
                'bg_image' => "frontend/assets/img/slide/slide-2.jpg",
            ],
            [
                'title' => "Sequi ea ut et est quaerat",
                'description' => "Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.",
                'bg_image' => "frontend/assets/img/slide/slide-3.jpg",
            ],
        ];

        foreach ($heroSections as $heroSection) {
            // Move the bg_image file to the storage directory
            $bgImagePath =  public_path($heroSection['bg_image']);
            $newBgImagePath = 'frontend/hero/' . basename($bgImagePath);
            // $newBgImagePath = basename($bgImagePath);
            Storage::disk('appPublic')->put($newBgImagePath, file_get_contents($bgImagePath));

            // Save the hero section record to the table
            $heroSection['bg_image'] = $newBgImagePath;
            HeroSection::create($heroSection);
        }
    }
}
