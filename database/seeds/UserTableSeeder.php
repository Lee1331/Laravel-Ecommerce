<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Test',
                'email' => 'test@gmail.com',
                'password' => bcrypt('secret'),
                'email_verified_at' => now(),
            ]
        ]);
    }
}
