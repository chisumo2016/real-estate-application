<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Venue;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Venue::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $faker->name,
        'slug' => Str::slug($name),
        'address' => $faker->address,
//        'latitude' => rand(-20, 20),
//        'longitude' => rand(-20, 20),

    ];
});
