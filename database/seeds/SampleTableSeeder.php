<?php

use Illuminate\Database\Seeder;

use App\Sample;

class SampleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sample::truncate();
        factory( App\Sample::class, 500 )->create();
    }
}
