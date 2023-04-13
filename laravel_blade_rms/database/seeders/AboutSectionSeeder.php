<?php

namespace Database\Seeders;

use App\Models\AboutSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aboutSection = [
            'title' => "Eum ipsam laborum deleniti",
            'title_bold' => "velit pariatur architecto aut nihil",
            'description_top' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit",
            'description_italic' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            'main_point_1' => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            'main_point_2' => "Duis aute irure dolor in reprehenderit in voluptate velit.",
            'main_point_3' => "Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur",
            'description_bottom' => "Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
            'video_url' => "https://www.youtube.com/",
            'image' => "frontend/assets/img/about.jpg",
        ];


        // Move the bg_image file to the storage directory
        $imagePath =  public_path($aboutSection['image']);
        $newImagePath = 'frontend/about/' . basename($imagePath);
        // $newBgImagePath = basename($bgImagePath);
        Storage::disk('appPublic')->put($newImagePath, file_get_contents($imagePath));

        // Save the hero section record to the table
        $aboutSection['image'] = $newImagePath;
        AboutSection::create($aboutSection);
    }
}
