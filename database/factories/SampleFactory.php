<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Pack;
use App\Sample;

$factory->define(Sample::class, function (Faker $faker) {
    $name = 'test_sample_' . rand(1,100);
    $keys = ['A', 'A#' , 'B', 'C', 'C#', 'D', 'D#', 'E', 'F', 'F#', 'G', 'G#'];
    
    return [
        'name' => $name,
        'pack_id'  => function(){
            return Pack::inRandomOrder()->first();
        },
        'url' => $name . '.wav',
        'key' => Arr::random($keys),
    ];
});
