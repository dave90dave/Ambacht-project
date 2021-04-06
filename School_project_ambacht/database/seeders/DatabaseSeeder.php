<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     $this->call(UsersTableSeeder::class);
<<<<<<< Updated upstream
     $this->call(ProductsTableSeeder::class);
     $this->call(MarketsTableSeeder::class);
     $this->call(CategoriesTableSeeder::class);
=======
     //$this->call(ProductsTableSeeder::class);
     //$this->call(MarketsTableSeeder::class);
     //$this->call(CategoriesTableSeeder::class);
>>>>>>> Stashed changes
    }
}
