<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\posts::class, function (Faker $faker) {
    return [
        'id' => $faker->id,
        'title' => $faker->title,
        'description' => $faker->description,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\users::class, function (Faker $faker) {
    return [
        'id' => $faker->id,
        'name' => $faker->name,
        'mobile' => $faker->mobile,
        'password' => $faker->password,
        'remember_token' => str_random(10),
    ];
});