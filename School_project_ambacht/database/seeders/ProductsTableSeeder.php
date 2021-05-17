<?php

namespace Database\Seeders;

use App\Models\Product;
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
        Product::create(
            [
            'category_id' => '1',
            'name' => 'Bananen',
            'price' => '2',
            'per_unit' => 'gram',
            'amount' => '100',
            'photo' => 'Foto',
            'sent_for_review' => '1',
            'pending_review' => '1',
            'active' => '1',
            'description' => 'Een tros bananen met een zachte en zoete smaak. Lekker om zo te eten als gezond tussendoortje.',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Product::create(
            [
            'category_id' => '2',
            'name' => 'Komkommer',
            'price' => '1',
            'per_unit' => 'stuks',
            'amount' => '2',
            'photo' => 'Foto',
            'sent_for_review' => '0',
            'pending_review' => '0',
            'active' => '1',
            'description' => 'Frisse komkommers, vers van het land.',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Product::create(
            [
            'category_id' => '1',
            'name' => 'Appels',
            'price' => '3',
            'per_unit' => 'stuks',
            'amount' => '12',
            'photo' => 'Foto',
            'sent_for_review' => '1',
            'pending_review' => null,
            'active' => '1',
            'description' => 'Appels zijn altijd lekker, vers van de boom geplukt.',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Product::create(
            [
            'category_id' => '1',
            'name' => 'Baksteen',
            'price' => '2',
            'per_unit' => '1',
            'amount' => '2',
            'photo' => 'Foto',
            'sent_for_review' => '1',
            'pending_review' => '0',
            'review_refused_reason' => 'Product is geen consumeerbaar product (voorbeeld)',
            'active' => '1',
            'description' => 'Iedere zaterdag vers uit de oven.',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Product::create(
            [
            'category_id' => '1',
            'name' => 'Rauwe melk',
            'price' => '2',
            'per_unit' => '1',
            'amount' => '2',
            'photo' => 'Foto',
            'sent_for_review' => '1',
            'pending_review' => '1',
            'active' => '1',
            'description' => 'Rechtstreeks van de koe, moet nog worden gekookt voor gebruik.',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Product::create(
            [
            'category_id' => '6',
            'name' => 'Honing',
            'price' => '4',
            'per_unit' => 'ML',
            'amount' => '200',
            'photo' => 'Foto',
            'active' => '1',
            'description' => 'Goed zoet, lekker op brood.',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Product::create(
            [
            'category_id' => '6',
            'name' => 'Ambachtelijke zeep',
            'price' => '3',
            'per_unit' => 'stuk',
            'amount' => '1',
            'photo' => 'Foto',
            'active' => '1',
            'description' => 'Keuze uit de geuren: Kiwi of banaan.',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Product::create(
            [
            'category_id' => '6',
            'name' => 'Pindakaas',
            'price' => '3',
            'per_unit' => 'Gram',
            'amount' => '300',
            'photo' => 'Foto',
            'active' => '1',
            'description' => 'Echte pindakaas, lekker op brood.',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );

        Product::create(
            [
            'category_id' => '6',
            'name' => 'Ambachtelijke parfum',
            'price' => '7',
            'per_unit' => 'ML',
            'amount' => '150',
            'photo' => 'Foto',
            'active' => '1',
            'description' => 'Heerlijke ambachtelijke parfums.',
            'created_at' => now()
            //'updated_at' => now()
            ]
        );
    }
}
