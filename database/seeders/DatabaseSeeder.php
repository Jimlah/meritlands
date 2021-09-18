<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(2)->create();
        // Post::factory(50)->create();
        // Video::factory(50)->create();

        User::factory()->create();
    }
}