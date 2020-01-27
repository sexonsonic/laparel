<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Costumer;
use Faker\Generator as Faker;

$factory->define(Costumer::class, function (Faker $faker) {
    return [
        'code_costumer'=>$faker->unique()->randomNumber,
        'name'=>$faker->name,
        'email'=>$faker->email,
        'country'=>$faker->country,
        'city'=>$faker->city,
        'address'=>$faker->address,
        'contact_number'=>$faker->phoneNumber
    ];
});
