<?php

namespace Database\Seeders;

use App\Models\SpecialSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SpecialSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specials = [
            [
                'tab_name' => "Modi sit est",
                'title' => "Architecto ut aperiam autem id",
                'title_italic' => "Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka",
                'description' => "Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero",
                'image' => "frontend/assets/img/specials-1.jpg",
            ],
            [
                'tab_name' => "Unde praesentium sed",
                'title' => "Et blanditiis nemo veritatis excepturi",
                'title_italic' => "Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka",
                'description' => "Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal",
                'image' => "frontend/assets/img/specials-2.jpg",
            ],
            [
                'tab_name' => "Pariatur explicabo vel",
                'title' => "Impedit facilis occaecati odio neque aperiam sit",
                'title_italic' => "Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut",
                'description' => "Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae",
                'image' => "frontend/assets/img/specials-3.jpg",
            ],
            [
                'tab_name' => "Nostrum qui quasi",
                'title' => "Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore",
                'title_italic' => "Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus",
                'description' => "Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore",
                'image' => "frontend/assets/img/specials-4.jpg",
            ],
            [
                'tab_name' => "Iusto ut expedita aut",
                'title' => "Est eveniet ipsam sindera pad rone matrelat sando reda",
                'title_italic' => "Omnis blanditiis saepe eos autem qui sunt debitis porro quia. ",
                'description' => "Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel",
                'image' => "frontend/assets/img/specials-5.jpg",
            ]
        ];


        foreach ($specials as $special) {
            // Move the bg_image file to the storage directory
            $imagePath =  public_path($special['image']);
            $newImagePath = 'frontend/special/' . basename($imagePath);
            Storage::disk('appPublic')->put($newImagePath, file_get_contents($imagePath));

            // Save the hero section record to the table
            $special['image'] = $newImagePath;
            SpecialSection::create($special);
        }
    }
}
