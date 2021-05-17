<?php

namespace Database\Seeders;

use App\Models\Market;
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
        Market::create(
            [
            'user_id' => '6',
            'name' => 'Alkmaarse Vismarkt',
            'location' => 'Alkmaar',
            'photo' => 'photo',
            'sent_for_review' => '1',
            'pending_review' => '1',
            'active' => '1',
            'description' => 'een eventuele beschrijving indien dat nodig is',
            'created_at' => now(),
            'updated_at' => now()
            ]
        );

        Market::create(
            [
            'user_id' => '7',
            'name' => 'Jan zijn boerenkraampje in Opmeer',
            'location' => 'Opmeer',
            'photo' => 'photo',
            'sent_for_review' => '0',
            'pending_review' => '0',
            'active' => '1',
            'description' => 'Pure boerderijproducten, afkomstig van het boerenland.',
            'created_at' => now(),
            'updated_at' => now()
            ]
        );

        Market::create(
            [
            'user_id' => '7',
            'name' => 'Jan zijn boerenkraampje in Nieuwe Niedorp',
            'location' => 'Nieuwe Niedorp',
            'photo' => 'photo',
            'sent_for_review' => '1',
            'pending_review' => null,
            'active' => '1',
            'description' => 'Pure boerderijproducten, afkomstig van het boerenland, maar dan in Nieuwe Niedorp.',
            'created_at' => now(),
            'updated_at' => now()
            ]
        );

        Market::create(
            [
            'user_id' => '6',
            'name' => 'Henkie zijn winkeltje',
            'location' => 'Heiloo',
            'photo' => 'photo',
            'sent_for_review' => '1',
            'pending_review' => '0',
            'active' => '1',
            'review_refused_reason' => 'De naam is niet toegestaan (voorbeeld)',
            'description' => 'Jaren ervaring op het gebied van ambacht.',
            'created_at' => now(),
            'updated_at' => now()
            ]
        );

        Market::create(
            [
            'user_id' => '5',
            'name' => 'Klaas ambachtszaken',
            'location' => 'Nieuwe Niedorp',
            'photo' => 'photo',
            'sent_for_review' => '1',
            'pending_review' => '1',
            'active' => '1',
            'description' => 'Pure ambacht, supergoede kwaliteit, kom vooral eens langs!',
            'created_at' => now(),
            'updated_at' => now()
            ]
        );

        Market::create(
            [
            'user_id' => '7',
            'name' => 'Jan zijn boerenkraampje in Nieuwe Niedorp',
            'location' => 'Nieuwe Niedorp',
            'photo' => 'photo',
            'description' => 'Pure boerderijproducten, afkomstig van het boerenland, maar dan in Nieuwe Niedorp.',
            'created_at' => now(),
            'updated_at' => now()
            ]
        );

        Market::create(
            [
            'user_id' => '9',
            'name' => 'De boerenwinkel van Piet',
            'location' => 'Obdam',
            'photo' => 'photo',
            'description' => 'Ontdek onze ambachtelijke likeuren, ter plaatse gemaakt.',
            'created_at' => now(),
            'updated_at' => now()
            ]
        );

        Market::create(
            [
            'user_id' => '7',
            'name' => 'Ambachtelijke wijn van Brenda',
            'location' => 'Nieuwe Niedorp',
            'photo' => 'photo',
            'description' => 'Kom eens langs, en probeer onze wijnen.',
            'created_at' => now(),
            'updated_at' => now()
            ]
        );

        Market::create(
            [
            'user_id' => '7',
            'name' => 'Jacob',
            'location' => 'Heerhugowaard',
            'photo' => 'photo',
            'description' => 'Als je dacht dat het brood in de supermarkt lekker was, dan moet je vooral eens bij ons langskomen!',
            'created_at' => now(),
            'updated_at' => now()
            ]
        );
    }
}
