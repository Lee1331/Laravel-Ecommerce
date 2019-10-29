<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    $startDate = '-1 year';
    $endDate = 'now';
    return [
        'name' => $faker->unique()->word,
        'created_at' => $faker->DateTimeBetween($startDate, $endDate),
    ];
});
