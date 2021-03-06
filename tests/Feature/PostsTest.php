<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Faker\Factory;
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

    public function test_user_can_create_post()
    {
        Artisan::call('migrate');
        User::factory()->create();

        $faker = Factory::create();
        $response = $this->actingAs(User::find(1))->post('/posts', [
            'title' => $faker->text(10),
            'content' => $faker->paragraph(4),
            'category' => $faker->randomElement(['News', 'Events', 'Articles', 'Poetry']),
        ]);

        $response
            ->assertStatus(302)
            ->assertRedirect('/posts')
            ->assertSessionHas('success');
    }

    public function test_user_can_not_create_post_without_title()
    {
        Artisan::call('migrate');
        $user = User::factory()->create();
        $response = $this->actingAs(User::find($user->id))->post('/posts', [
            'content' => 'content',
            'category' => 'category',
        ]);
        $response->assertStatus(302);
        $response->assertSessionHas('errors');
    }

    public function test_user_can_view_edit_post()
    {
        Artisan::call('migrate');
        $user = User::factory()->create();
        $post = Post::factory()->create();

        $response = $this->actingAs(User::find($user->id))->get('/posts/' . $post->id . '/edit');
        $response->assertStatus(200);
    }

    public function test_user_can_update_post()
    {
        Artisan::call('migrate');
        $user = User::factory()->create();
        $post = Post::factory()->create();

        $faker = Factory::create();

        $response = $this->actingAs(User::find($user->id))->put('/posts/' . $post->id, [
            'title' => $faker->text(10),
            'content' => $faker->paragraph(4),
            'category' => $faker->randomElement(['News', 'Events', 'Articles', 'Poetry']),
        ]);

        $response
            ->assertStatus(302)
            ->assertRedirect('/posts')
            ->assertSessionHas('success');
    }


    public function test_user_can_not_update_post_without_title()
    {
        Artisan::call('migrate');
        $user = User::factory()->create();
        $post = Post::factory()->create();

        $faker = Factory::create();
        $response = $this->actingAs(User::find($user->id))->put('/posts/' . $post->id, [
            'content' => $faker->paragraph(4),
            'category' => $faker->randomElement(['News', 'Events', 'Articles', 'Poetry']),
        ]);
        $response->assertStatus(302);
        $response->assertSessionHas('errors');
    }

    public function test_user_can_delete_post()
    {
        Artisan::call('migrate');
        $user = User::factory()->create();
        $post = Post::factory()->create();

        $response = $this->actingAs(User::find($user->id))->delete('/posts/' . $post->id);
        $response->assertStatus(302);
        $response->assertRedirect('/posts');
    }
}