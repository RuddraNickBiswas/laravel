<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Saul Goodman',
                'post' => 'Ceo &amp; Founder',
                'description' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
                'image' => 'frontend/assets/img/testimonials/testimonials-1.jpg',
                'rating' => '5',
            ],
            [
                'name' => 'Sara Wilsson',
                'post' => 'Designer',
                'description' => ' Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
                'image' => 'frontend/assets/img/testimonials/testimonials-2.jpg',
                'rating' => '5',
            ],
            [
                'name' => 'Jena Karlis',
                'post' => 'Store Owner',
                'description' => ' Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
                'image' => 'frontend/assets/img/testimonials/testimonials-3.jpg',
                'rating' => '2',
            ],
            [
                'name' => 'Matt Brandon',
                'post' => 'Freelancer',
                'description' => ' Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.',
                'image' => 'frontend/assets/img/testimonials/testimonials-4.jpg',
                'rating' => '3',
            ],
            [
                'name' => 'John Larson',
                'post' => 'Entrepreneur',
                'description' => ' Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.',
                'image' => 'frontend/assets/img/testimonials/testimonials-5.jpg',
                'rating' => '4',
            ],
        ];

        foreach ($testimonials as $testimonial) {

            $imagePath =  public_path($testimonial['image']);
            $newImagePath = 'frontend/testimonials/' . basename($imagePath);
            Storage::disk('appPublic')->put($newImagePath, file_get_contents($imagePath));

            // Save the hero section record to the table
            $testimonial['image'] = $newImagePath;
            Testimonial::create($testimonial);
        };
    }
}
