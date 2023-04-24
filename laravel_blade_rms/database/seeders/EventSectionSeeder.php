<?php

namespace Database\Seeders;

use App\Models\EventSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class EventSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'Birthday Parties',
                'price' => '189',
                'description_top' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'point_1' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'point_2' => 'Duis aute irure dolor in reprehenderit in voluptate velit.',
                'point_3' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'description_bottom' => ' Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'image' => 'frontend/assets/img/event-birthday.jpg',
            ],
            [
                'title' => 'Birthday Parties',
                'price' => '290',
                'description_top' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'point_1' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'point_2' => 'Duis aute irure dolor in reprehenderit in voluptate velit.',
                'point_3' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'description_bottom' => ' Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'image' => 'frontend/assets/img/event-private.jpg',
            ],
            [
                'title' => 'Custom Parties',
                'price' => '99',
                'description_top' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'point_1' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'point_2' => 'Duis aute irure dolor in reprehenderit in voluptate velit.',
                'point_3' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'description_bottom' => ' Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'image' => 'frontend/assets/img/event-custom.jpg',
            ],
        ];

        foreach ($events as $event) {
            // Move the bg_image file to the storage directory
            $imagePath =  public_path($event['image']);
            $newImagePath = 'frontend/events/' . basename($imagePath);
            // $newBgImagePath = basename($bgImagePath);
            Storage::disk('appPublic')->put($newImagePath, file_get_contents($imagePath));

            // Save the hero section record to the table
            $event['image'] = $newImagePath;
            EventSection::create($event);
        }
    }
}
