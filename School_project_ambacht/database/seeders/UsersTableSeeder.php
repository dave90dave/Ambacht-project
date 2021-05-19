<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'usertype' => 'admin',
            'public' => '0'
            ]
        );

        User::create(
            [
            'name' => 'Vendor',
            'email' => 'vendor@vendor.com',
            'password' => Hash::make('vendor'),
            'usertype' => 'vendor',
            'public' => '0'
            ]
        );

        User::create(
            [
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
            'usertype' => 'user',
            'public' => '0'
            ]
        );

        User::create(
            [
            'name' => 'Klaas',
            'email' => 'klaas@klaas.com',
            'password' => Hash::make('klaas'),
            'usertype' => 'user',
            'public' => '1',
            'website' => 'www.test.com'
            ]
        );

        User::create(            [
            'name' => 'Hans',
            'email' => 'hans@hans.com',
            'password' => Hash::make('hans'),
            'usertype' => 'user',
            'public' => '1'
            ]
        );

        User::create(
            [
            'name' => 'Henkie',
            'email' => 'henkie@henkie.com',
            'password' => Hash::make('henkie'),
            'usertype' => 'user',
            'public' => '1'
            ]
        );

        User::create(
            [
            'name' => 'Jan',
            'email' => 'jan@jan.com',
            'password' => Hash::make('jan'),
            'usertype' => 'user',
            'public' => '1'
            ]
        );

        User::create(
            [
            'name' => 'Piet',
            'email' => 'piet@piet.com',
            'password' => Hash::make('piet'),
            'usertype' => 'user',
            'public' => '1'
            ]
        );

        User::create(
            [
            'name' => 'Brenda',
            'email' => 'brenda@brenda.com',
            'password' => Hash::make('brenda'),
            'usertype' => 'user',
            'public' => '1'
            ]
        );

        User::create(
            [
            'name' => 'Jack',
            'email' => 'jack@jack.com',
            'password' => Hash::make('jack'),
            'usertype' => 'user',
            'public' => '1'
            ]
        );

        User::create(
            [
            'name' => 'Bert',
            'email' => 'bert@bert.com',
            'password' => Hash::make('bert'),
            'usertype' => 'user',
            'public' => '1'
            ]
        );

        User::create(
            [
            'name' => 'Jacob',
            'email' => 'jacob@jacob.com',
            'password' => Hash::make('jacob'),
            'usertype' => 'user',
            'public' => '1'
            ]
        );

        User::create(
            [
            'name' => 'Johnie',
            'email' => 'johnie@johnie.com',
            'password' => Hash::make('johnie'),
            'usertype' => 'user',
            'public' => '1'
            ]
        );
    }
}
