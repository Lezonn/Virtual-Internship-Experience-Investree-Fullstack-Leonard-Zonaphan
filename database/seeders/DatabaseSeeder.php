<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User seeder
        User::create([
            'name' => 'Leonard',
            'email' => 'leonard@gmail.com',
            'password' => bcrypt('leo123')
        ]);

        User::create([
            'name' => 'Budi',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('budi123')
        ]);

        User::create([
            'name' => 'Andy',
            'email' => 'andy@gmail.com',
            'password' => bcrypt('andy123')
        ]);

        // Category seeder
        Category::create([
            'name' => 'Software Engineering',
            'user_id' => 1
        ]);

        Category::create([
            'name' => 'Artificial Intelligence',
            'user_id' => 2
        ]);

        Category::create([
            'name' => 'Computer Network',
            'user_id' => 3
        ]);

        // Article seeder
        Article::factory(10)->create();
    }
}
