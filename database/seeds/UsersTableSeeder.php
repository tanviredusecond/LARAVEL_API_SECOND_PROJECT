<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // first truncate the table
        User::truncate();
        $faker = \Faker\Factory::create();
        // we cant create password with faker
        // so we make a same hashed password for every user
        $password = Hash::make('password');

        // we create a administratior account and 100 user
        User::create([
            "name" => "Administrator",
            "email" => "admin@home.com",
            "password" => $password,
        ]);



        // now we add 100 user
        for($i=0;$i<=100;$i++){
            User::create([
                "name" => $faker->name,
                "email" => $faker->email,
                "password" => $password,
            ]);
        }
    }
}
