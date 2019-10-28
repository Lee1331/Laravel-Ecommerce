<?php

use Illuminate\Database\Seeder;

use App\Pack;
use App\User;
use App\Role;
use App\Sample;

class PackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pack::truncate();

        //Create some authors
        // $owners = factory( 'App\User', 5)->make();

        // // Create 15 records of packs
        // factory( Pack, 15 )->create()->each( function($pack) {

        //     //Seed the relation with one user
        //     // $owner = factory( 'App\User' )->make();
        //     // $owner = array_rand($owners);
        //     // $pack->owner()->save( $owner );

        //     //Seed the relation with 50 samples
        //     $samples = factory( 'App\Sample', 50 )->make();
        //     $pack->samples()->saveMany( $samples );
        // });

        // factory(App\Pack::class, 15)->create()->each(function($pack){
        //     $author = factory(App\User::class)->make();
        //     $authorRole = Role::where('name','author')->first();
        //     $author->roles()->attach($authorRole);

        //     $pack->owner()->save($author);
        // });
        factory(App\Pack::class, 15)->create();
    }
}
