<?php

use Illuminate\Database\Seeder;

use App\Pack;
use App\Sample;
use App\Tag;
use App\User;

class PackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Pack::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        // // Create 15 records of packs
        factory(App\Pack::class, 15)->create();



        factory(App\Pack::class, 5)->create()->each(function($pack){
            $pack->tags()->attach( Tag::where('name', 'drums')->first() );
        });

        factory(App\Pack::class, 5)->create()->each(function($pack){
            $pack->tags()->attach( Tag::where('name','collections')->first() );
        });

        factory(App\Pack::class, 5)->create()->each(function($pack){
            $pack->tags()->attach( Tag::where('name', 'basses')->first() );
        });
    }
}
