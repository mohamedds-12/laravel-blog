<?php

namespace Database\Factories;


use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'content' => $this->faker->paragraph(),
            // 'category_id' => $this->faker->numberBetween(1,1),
            'image' => $this->faker->numberBetween(1,38),
            'created_at' => now(),
        ];
    }
}
