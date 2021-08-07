<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create();

        $user_id = $faker->numberBetween(1, User::count());
        $title = $faker->sentence(3);
        $content = $faker->paragraph(3);
        $is_published = $faker->boolean();
        $category = $faker->randomElement(['News', 'Events', 'Articles', 'Others']);

        return [
            'user_id' => $user_id,
            'title' => $title,
            'content' => $content,
            'is_published' => $is_published,
            'published_at' => fn () => $is_published ? now() : null,
            'slug' => Str::slug($title),
            'category' => $category,
        ];
    }
}