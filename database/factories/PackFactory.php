<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Pack;
use App\User;
use App\Role;

$factory->define(Pack::class, function (Faker $faker) {
    // $user_ids = \DB::table('users')->select('id')->get();

    // $author_ids = \DB::table('users')->select('id')->get();
    // $author_ids = Role::with('users')->where('name', 'author')->get();
    // Role::where('name', 'admin')->random()->users()->get();

    return [
        'name' => $faker->sentence(),
        'author_id' => function(){
            // return App\User::all()->random();
            // return Role::where('name', 'author')->random()->users()->get();
            // return Role::where('name', 'author')->inRandomOrder()->first();

            // return User::whereHas('roles', function($q){
            //     $q->where('name', '=', 'author');
            // })
            // ->inRandomOrder()->first();

            // return User::where('name', 'author')->inRandomOrder()->first();

            // return DB::table('users')
            //     ->where('roles:author')->exists()
            //     ->inRandomOrder()
            //     ->first();

            // return App\User::all()->random()->where('role_user:role_id', '2');
            // return App\User::with('roles', 'author')->inRandomOrder()->first();
            //return DB::table('role_user')->where('role_id', '2')->whereIn('user_id')->inRandomOrder()->first();

            $user = User::inRandomOrder()->first();
            $authorRole = Role::where('name', 'author')->first();
            $user->roles()->attach($authorRole);
            return $user->id;
        },
        'amount' => $faker->randomDigit(),
    ];
});
