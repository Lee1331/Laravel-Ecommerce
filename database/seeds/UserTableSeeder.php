<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name','author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Lee',
            'email' => 'lee1331@hotmail.co.uk',
            'password' => bcrypt('secret'),
            'email_verified_at' => now(),
        ]);
        $author = User::create([
            'name' => 'Jeaves',
            'email' => 'jeaves@gmail.com',
            'password' => bcrypt('secret'),
            'email_verified_at' => now(),
        ]);
        $user = User::create([
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('secret'),
            'email_verified_at' => now(),
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }
}
