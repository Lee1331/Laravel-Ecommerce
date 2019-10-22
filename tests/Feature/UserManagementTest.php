<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\User;
use App\Role;

class UserManagementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guests_cannot_access_the_user_management_area()
    {
        $response = $this->get('/admin/users');
        $response->assertRedirect('/login');
    }

   /** @test */
    public function users_cannot_access_the_user_management_area()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);

        $response = $this->get('/admin/users');
        $response->assertStatus(403);
    }

    /** @test */
    public function authors_can_access_the_user_management_area()
    {
        $this->seed('RoleTableSeeder');

        $author = factory(User::class)->create();
        $authorRole = Role::where('name', 'author')->first();
        $author->roles()->attach($authorRole);
        $this->actingAs($author);

        $response = $this->get('/admin/users');
        $response->assertStatus(200);
    }

    /** @test */
    public function admins_can_access_the_user_management_area()
    {
        // $this->withExceptionHandling();
        $this->seed('RoleTableSeeder');

        $admin = factory(User::class)->create();
        $adminRole = Role::where('name', 'admin')->first();
        $admin->roles()->attach($adminRole);
        $this->actingAs($admin);

        $response = $this->get('/admin/users');
        $response->assertStatus(200);

        // dd($admin->hasRole('admin'));
    }
}
