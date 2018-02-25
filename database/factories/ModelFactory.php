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
$factory->define(App\Owner::class, function (Faker\Generator $faker) {
    static $password;
    $images = Storage::disk('public')->allFiles('images/owner');
    $randomImagePath = $images[array_rand($images)];

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'image' => 'statics/' . $randomImagePath,
        'eth_address' => '0x0',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Doge::class, function (Faker\Generator $faker) {
    $images = Storage::disk('public')->allFiles('images/doge');
    $randomImagePath = $images[array_rand($images)];

    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'image' => 'statics/' . $randomImagePath,
        'liked_count' => rand(1, 10),
        'owner_id' => rand(1, 3),
    ];
});

$factory->define(App\Gene::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->colorName,
    ];
});
