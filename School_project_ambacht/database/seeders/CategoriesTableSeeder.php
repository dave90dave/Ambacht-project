<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
            [
            'name' => 'Fruit',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Category::create(
            [
            'name' => 'Groente',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Category::create(
            [
            'name' => 'Zuivel',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Category::create(
            [
            'name' => 'Vers brood',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Category::create(
            [
            'name' => 'Sappen',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Category::create(
            [
            'name' => 'Overige producten',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );
    }
}
