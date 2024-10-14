<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define an array of food categories
        $categories = [
            'Fruits',
            'Vegetables',
            'Dairy',
            'Meat',
            'Fish',
            'Grains',
            'Legumes',
            'Nuts',
            'Seeds',
            'Beverages',
            'Snacks',
            'Desserts',
            'Baked Goods',
            'Condiments',
            'Sauces',
            'Herbs',
            'Spices',
            'Frozen Foods',
            'Canned Foods',
            'Prepared Foods',
            'Ethnic Foods',
            'Organic Foods',
            'Health Foods',
            'Breakfast Foods',
            'Packaged Foods'
        ];

        // Insert categories into the database
        foreach ($categories as $category) {
            DB::table('food_categories')->insert([
                'name' => $category,
        'created_by' => 'SeederAdmin',
        'created_on' => now(), // Set the current timestamp as `created_on`
        'created_at' => now(),
        'updated_at' => now(),
            ]);
        }
    }
}
