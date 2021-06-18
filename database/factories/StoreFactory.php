<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Store::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'about' => $faker->text,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber
    ];
});
