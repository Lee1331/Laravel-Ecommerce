<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        DB::table('pack_tag')->truncate();

        factory(App\Tag::class, 7)->create();
        DB::table('tags')->insert(
            [
                [
                    'name' => 'drums', 'created_at' => now()
                ],
                [
                    'name' => 'collections', 'created_at' => now()
                ],
                [
                'name' => 'basses', 'created_at' => now()
                ]
                
            ]
        );

    }
}
