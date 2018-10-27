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
        "title" => $faker->text(200),
        "isbn" => $faker->isbn13,
        "page_count" => $faker->numberBetween(60,150),
        "price" => $faker->numberBetween(300, 150),
        "description" => $faker->text,
        "publisher_id" => $faker->randomElement(App\Publisher::all()->pluck('id')->toArray()),
        "author_id" => $faker->randomElement(App\Author::all()->pluck('id')->toArray()),
    ];
});

$factory->define(App\IdentityDocument::class, function (Faker\Generator $faker) {
    return [
        'user_id' => random_int($min = 2, $max = 10),
        'type' => $faker->colorName,
        'due_date' => $faker->dateTime,
        'city' => $faker->city,
    ];
});


$factory->define(App\Item::class, function (Faker\Generator $faker) {
    return [
        'item_name' => $faker->word,
        'price' => $faker->random_int($min = 200, $max = 1000)
    ];
});

$factory->define(App\Invoice::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->random_int($min = 1, $max = 50),
        'order_id' => $faker->random_int($min = 1, $max = 50),
        'price' => $faker->random_int($min = 200, $max = 1000)
    ];
});

$factory->define(App\Order::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->random_int($min = 1, $max = 50),
        'item_id' => $faker->random_int($min = 1, $max = 50)
    ];
});