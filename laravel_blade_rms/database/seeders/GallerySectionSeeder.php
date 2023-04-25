<?php

namespace Database\Seeders;

use App\Models\GallerySection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class GallerySectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gallerys = [
            [
                'image' => 'frontend/assets/img/gallery/gallery-1.jpg',
            ],
            [
                'image' => 'frontend/assets/img/gallery/gallery-2.jpg',
            ],
            [
                'image' => 'frontend/assets/img/gallery/gallery-3.jpg',
            ],
            [
                'image' => 'frontend/assets/img/gallery/gallery-4.jpg',
            ],
            [
                'image' => 'frontend/assets/img/gallery/gallery-5.jpg',
            ],
            [
                'image' => 'frontend/assets/img/gallery/gallery-6.jpg',
            ],
            [
                'image' => 'frontend/assets/img/gallery/gallery-7.jpg',
            ],
            [
                'image' => 'frontend/assets/img/gallery/gallery-8.jpg',
            ],
        ];

        foreach ($gallerys as $gallery) {
            // Move the bg_image file to the storage directory
            $imagePath =  public_path($gallery['image']);
            $newImagePath = 'frontend/gallery/' . basename($imagePath);
            // $newBgImagePath = basename($bgImagePath);
            Storage::disk('appPublic')->put($newImagePath, file_get_contents($imagePath));

            // Save the hero section record to the table
            $gallery['image'] = $newImagePath;

            GallerySection::create($gallery);
        }
    }
}
