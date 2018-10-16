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
        "title" => $faker->text(200),
        "isbn" => $faker->isbn13,
        "page_count" => $faker->numberBetween(60,150),
        "price" => $faker->numberBetween(300, 150),
        "description" => $faker->text,
        "publisher_id" => $faker->randomElement(App\Publisher::all()->pluck('id')->toArray()),
        "author_id" => $faker->randomElement(App\Author::all()->pluck('id')->toArray()),
    ];
});
