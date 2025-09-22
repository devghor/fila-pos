<?php

namespace Database\Seeders;

use App\Models\Pos\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::updateOrCreate([
            'name_en' => 'Beverages',
        ], [
            'name_bn' => 'পানীয়',
            'icon' => 'fa-glass-martini',
            'description' => 'All kinds of drinks and beverages.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::updateOrCreate([
            'name_en' => 'Snacks',
        ], [
            'name_bn' => 'স্ন্যাকস',
            'icon' => 'fa-cookie-bite',
            'description' => 'Quick bites and snacks.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
