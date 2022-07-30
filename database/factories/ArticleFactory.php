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
            'title' => fake()->word,
            'content' => file_get_contents('http://loripsum.net/api/6/medium'),
            'image' => null,
            'user_id' => rand(1,3),
            'category_id' => rand(1,3)
        ];
    }
}
