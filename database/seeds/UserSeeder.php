<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            "name" => "William",
            "email" => "kamal.misc@gmail.com",
            "email_verified_at" => now(),
            "password" => bcrypt("password"),
        ]);
    }
}
