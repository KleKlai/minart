<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Api\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'email'     => $faker->unique()->safeEmail,
        'gender'    => $faker->randomElement(['male', 'female']),
        'birthday'  => $faker->date($format = 'Y-m-d', $max = 'now'),
        'profession'=> $faker->jobTitle,
    ];
});
