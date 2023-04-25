<?php

namespace Database\Seeders;

use App\Models\ChefsSectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ChefsSectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $bg_image = 'frontend/assets/img/chefs/chefs-1.jpg';

        
        // $bgImagePath =  public_path($bg_image);
        // $newBgImagePath = 'frontend/chefs/' . basename($bgImagePath);
     
        // Storage::disk('appPublic')->put($newBgImagePath, file_get_contents($bgImagePath));

        // $bg_image = $newBgImagePath;


        ChefsSectionTitle::insert([
            'title_first' => 'Our Proffesional',
            'title_last' => 'Chefs',
            'description' => 'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.',
            // 'bg_image' => $bg_image,
        ]);
    }
}
