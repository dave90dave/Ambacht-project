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
            'name' => 'Bananen',
            'price' => '2',
            'per_unit' => '1',
            'amount' => '2',
            'photo' => 'https://www.versgalerij.be/images/right/groenten-en-fruit-kopen-kalmthout.jpg',
            'active' => '1',
            'description' => 'Een tros bananen met een zachte en zoete smaak. Lekker om zo te eten als gezond tussendoortje.',
            'created_at' => now()
            //'updated_at' => now()
        ]);
    }
}
