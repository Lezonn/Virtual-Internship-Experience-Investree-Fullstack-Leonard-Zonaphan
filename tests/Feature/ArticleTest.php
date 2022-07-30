<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    public function test_if_user_can_see_home_page()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_if_user_can_see_login_page()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_if_user_can_see_register_page()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function test_if_user_can_see_my_article_page()
    {
        $user = \App\Models\User::factory(1)->create();
        $this->actingAs($user[0], 'web');

        $response = $this->get('/my-article');
        $response->assertStatus(200);
    }

    public function test_if_user_can_see_create_article_page()
    {
        $user = \App\Models\User::factory(1)->create();
        $this->actingAs($user[0], 'web');

        $response = $this->get('/my-article/create');
        $response->assertStatus(200);
    }

    public function test_if_user_can_see_edit_article_page()
    {
        $user = \App\Models\User::factory(1)->create();
        $this->actingAs($user[0], 'web');
        Article::factory(1)->create();

        $response = $this->get('/my-article/1/edit');
        $response->assertStatus(200);
    }

    public function test_if_user_can_see_categories_page()
    {
        $user = \App\Models\User::factory(1)->create();
        $this->actingAs($user[0], 'web');

        $response = $this->get('/categories');
        $response->assertStatus(200);
    }

    public function test_if_user_can_see_create_category_page()
    {
        $user = \App\Models\User::factory(1)->create();
        $this->actingAs($user[0], 'web');

        $response = $this->get('/categories/create');
        $response->assertStatus(200);
    }

    public function test_if_user_can_see_edit_category_page()
    {
        $user = \App\Models\User::factory(1)->create();
        $this->actingAs($user[0], 'web');
        Category::create([
            'name' => 'testing',
            'user_id' => 1
        ]);

        $response = $this->get('/categories/1/edit');
        $response->assertStatus(200);
    }
}
