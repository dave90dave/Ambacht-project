<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'LEGO Technic Cyber Drone',
            'price' => '10',
            'per_unit' => '1',
            'amount' => '4',
            'photo' => 'https://www.versgalerij.be/images/right/groenten-en-fruit-kopen-kalmthout.jpg',
            'active' => '1',
            'description' => 'Ruimteavonturen in een Cyberdrone met herbouwbaar 3-in-1 speelgoed',
            'created_at' => now()
            //'updated_at' => now()
        ]);
    }
}
