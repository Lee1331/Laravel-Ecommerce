<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Pack;
use App\User;
use App\Role;

$factory->define(Pack::class, function (Faker $faker) {

    return [
        'name' => $faker->sentence(),
        'description' => $faker->paragraph(),
        'author_id' => function(){
            $user = User::inRandomOrder()->first();
            $authorRole = Role::where('name', 'author')->first();
            $user->roles()->attach($authorRole);
            return $user->id;
        },
        'cover_image' => 'mixer.jpg',
        'amount' => $faker->randomDigit(),
    ];
});
