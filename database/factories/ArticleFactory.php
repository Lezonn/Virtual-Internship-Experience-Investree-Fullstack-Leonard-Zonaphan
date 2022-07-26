<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->words(2, true),
            'content' => fake()->paragraph(),
            'image' => 'https://source.unsplash.com/400x400',
            'category_id' => fake()->numberBetween(1, 3),
            'user_id' => 0
        ];
    }
}
