<?php

namespace Database\Seeders;

use App\Models\ContactSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'title' => 'Location',
                'first_line' => 'A108 Adam Street',
                'second_line' => 'New York, NY 535022',
            ],
            [
                'title' => 'Open Hours',
                'first_line' => 'Monday-Saturday',
                'second_line' => '11:00 AM - 2300 PM',
            ],
            [
                'title' => 'Email',
                'first_line' => 'info@example.com',
                'second_line' => 'contact@example.com',
            ],
            [
                'title' => 'Call',
                'first_line' => '+1 5589 55488 51',
                'second_line' => '+1 5589 22475 14',
            ],
        ];

        foreach ($contacts as $contact) {

            ContactSection::create($contact);
        }
    }
}
