<?php

namespace Database\Seeders;

use App\Models\Chefs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ChefsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chefs = [
            [
                'image' => 'frontend/assets/img/chefs/chefs-1.jpg',
                'name' => 'Walter White',
                'post' => 'Master Chef',
                'twitter' => 'https://twitter.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
            ],
            [
                'image' => 'frontend/assets/img/chefs/chefs-2.jpg',
                'name' => 'Sarah Jhonson',
                'post' => 'Patissier',
                'twitter' => 'https://twitter.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
            ],
            [
                'image' => 'frontend/assets/img/chefs/chefs-3.jpg',
                'name' => 'William Anderson',
                'post' => 'Cook',
                'twitter' => 'https://twitter.com/',
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://www.linkedin.com/',
            ],
        ];



        foreach ($chefs as $chef) {
            // Move the bg_image file to the storage directory
            $imagePath =  public_path($chef['image']);
            $newImagePath = 'frontend/chefs/' . basename($imagePath);
            Storage::disk('appPublic')->put($newImagePath, file_get_contents($imagePath));

            // Save the hero section record to the table
            $chef['image'] = $newImagePath;
            Chefs::create($chef);
        }
    }
}
