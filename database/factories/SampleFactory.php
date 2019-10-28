<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Pack;
use App\Sample;

$factory->define(Sample::class, function (Faker $faker) {
    // $name = $faker->sentence();
    $name = 'test_sample_' . rand(1,100);

    $keys = ['A', 'A#' , 'B', 'C', 'C#', 'D', 'D#', 'E', 'F', 'F#', 'G', 'G#'];
    return [
        'name' => $name,
        'pack_id'  => function(){
            return Pack::inRandomOrder()->first();
        },
        // 'url' => $name + '.wav',
        // 'url' => $faker->file('packs\samples','packs\samples', false),

        'url' => $name . '.wav',
        // 'url' => 'test_sample_' . rand(1,9) . '.wav',
        // 'url' => '(packname/) test_sample_' . rand(1,9) . '.wav',

        // 'key' => randomElement($keys),
        // 'key' => array_rand($keys),
        'key' => Arr::random($keys),
    ];
});
