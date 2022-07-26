<?php

namespace Tests\Unit;

use Tests\TestCase;


class ArticleTest extends TestCase
{
    public function test_create_article(){
        $user = \App\Models\User::factory(1)->create();
        $this->actingAs($user[0], 'api');

        $article = [
            'title' => fake()->words(2, true),
            'content' => fake()->paragraph(),
            'image' => 'https://source.unsplash.com/400x400',
            'category_id' => fake()->numberBetween(1, 3),
            'user_id' => 0
        ];

        $this->postJson(route('articles.store'), $article)
            ->assertStatus(201)
            ->assertJsonStructure([
                "article" => [
                    'title',
                    'content',
                    'image',
                    'category_id',
                    'user_id',
                    'created_at',
                    'updated_at',
                ],
                "message"
            ]);
    }

    public function test_update_article(){
        $user = \App\Models\User::factory(1)->create();
        $this->actingAs($user[0], 'api');

        $article = \App\Models\Article::factory()->create();
        $updatedArticle = [
            'title' => fake()->words(2, true),
            'content' => fake()->paragraph(),
            'image' => 'https://source.unsplash.com/400x400',
            'category_id' => fake()->numberBetween(1, 3),
            'user_id' => 0
        ];
        $this->put(route('articles.update', $article['id']), $updatedArticle)
            ->assertStatus(200)
            ->assertJsonStructure([
                "article" => [
                    'title',
                    'content',
                    'image',
                    'category_id',
                    'user_id',
                    'created_at',
                    'updated_at',
                ],
                "message"
            ]);
    }

    public function test_show_article(){
        $user = \App\Models\User::factory(1)->create();
        $this->actingAs($user[0], 'api');

        $article = \App\Models\Article::factory()->create();
        $this->get(route('articles.show', $article['id']))
            ->assertStatus(200);
    }

    public function test_delete_article(){
        $user = \App\Models\User::factory(1)->create();
        $this->actingAs($user[0], 'api');

        $article = \App\Models\Article::factory()->create();
        $this->delete(route('articles.destroy', $article['id']))
            ->assertStatus(200);
    }

    public function test_show_list_article(){
        $user = \App\Models\User::factory(1)->create();
        $this->actingAs($user[0], 'api');

        $articles = \App\Models\Article::factory(2)->create()->map(function ($article) {
            return $article->only(['id', 'title', 'content']);
        });
        $this->get(route('articles.index'))
        ->assertStatus(200);
    }
}
