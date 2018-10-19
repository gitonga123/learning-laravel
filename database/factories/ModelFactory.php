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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'identity_document' => random_int($min = 2, $max = 5),
    ];
});
$factory->define(App\Author::class, function (Faker\Generator $faker) {
    return [
        "first_name" => $faker->firstName,
        "last_name" => $faker->lastName,
    ];
});

$factory->define(App\Publisher::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "year" => $faker->year
    ];
});

$factory->define(App\Book::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->unique()->text(10),
        "isbn" => $faker->streetAddress,
        "page_count" => $faker->randomDigitNotNull,
        "price" => $faker->randomDigitNotNull,
        "description" => $faker->text,
        "publisher_id" => 2,
        "author_id" => 2
    ];
});
