<?php

namespace Database\Seeders;

use App\Models\MenuItems;
use App\Models\MenuType;
use Illuminate\Database\Seeder;

class MenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $starters = MenuType::where('name', 'Starters')->first();
        $salads = MenuType::where('name', 'Salads')->first();
        $specialty = MenuType::where('name', 'Specialty')->first();

        $startersItems = [
            [
                'name' => 'Lobster Bisque',
                'description' => 'Lorem, deren, trataro, filede, nerada',
                'price' => 5.95,
                'menu_type_id' => $starters->id
            ],
            [
                'name' => 'Crab Cake',
                'description' => 'A delicate crab cake served on a toasted roll with lettuce and tartar sauce',
                'price' => 7.95,
                'menu_type_id' => $starters->id
            ],
            [
                'name' => 'Mozzarella Stick',
                'description' => 'Lorem, deren, trataro, filede, nerada',
                'price' => 4.95,
                'menu_type_id' => $starters->id
            ]
        ];

        $saladsItems = [
            [
                'name' => 'Caesar Selections',
                'description' => 'Lorem, deren, trataro, filede, nerada',
                'price' => 8.95,
                'menu_type_id' => $salads->id
            ],
            [
                'name' => 'Greek Salad',
                'description' => 'Fresh spinach, crisp romaine, tomatoes, and Greek olives',
                'price' => 9.95,
                'menu_type_id' => $salads->id
            ],
            [
                'name' => 'Spinach Salad',
                'description' => 'Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette',
                'price' => 9.95,
                'menu_type_id' => $salads->id
            ]
        ];

        $specialtyItems = [
            [
                'name' => 'Bread barrel',
                'description' => 'Lorem, deren, trataro, filede, nerada',
                'price' => 6.95,
                'menu_type_id' => $specialty->id
            ],
            [
                'name' => 'Tuscan Grilled',
                'description' => 'Grilled chicken with provolone, artichoke hearts, and roasted red pesto',
                'price' => 9.95,
                'menu_type_id' => $specialty->id
            ],
            [
                'name' => 'Lobster Roll',
                'description' => 'Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll',
                'price' => 12.95,
                'menu_type_id' => $specialty->id
            ]
        ];

        foreach ($startersItems as $item) {
            MenuItems::create([
                'name' => $item['name'],
                'description' => $item['description'],
                'price' => $item['price'],
                'menu_type_id' => $item['menu_type_id']
            ]);
        }
        foreach ($saladsItems as $item) {
            MenuItems::create([
                'name' => $item['name'],
                'description' => $item['description'],
                'price' => $item['price'],
                'menu_type_id' => $item['menu_type_id']
            ]);
        }
        foreach ($specialtyItems as $item) {
            MenuItems::create([
                'name' => $item['name'],
                'description' => $item['description'],
                'price' => $item['price'],
                'menu_type_id' => $item['menu_type_id']
            ]);
        }
    }
}
