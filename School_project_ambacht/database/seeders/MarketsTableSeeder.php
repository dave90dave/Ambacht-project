<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('markets')->insert([
            'user_id' => '1',
            'name' => 'Alkmaarse Vismarkt',
            'location' => 'location',
            'photo' => 'photo',
            'description' => 'een eventuele beschrijving indien dat nodig is',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
