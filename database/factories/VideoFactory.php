<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class VideoFactory extends Factory
{
    use WithFaker;
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'video_url' => "https://www.youtube.com/watch?v=qSiGNpYJ0V4",
            'thumbnail_url' => $this->faker->imageUrl,
            'views' => $this->faker->numberBetween(0, 100),
        ];
    }
}