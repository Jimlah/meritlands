<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_view_all_posts()
    {
        Artisan::call('migrate');
        User::factory(2)->create();
        Post::factory(5)->create();

        $user = User::find(1);

        $response = $this->actingAs($user)->get('/posts');
        $response->assertStatus(200);
    }

    public function test_guest_can_not_login_and_view_all_post()
    {
        Post::factory(5)->create();
        $response = $this->get('/posts');
        $response->assertStatus(500);
    }
}