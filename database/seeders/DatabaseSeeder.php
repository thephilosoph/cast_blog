<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
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
        // Post::factory(10)->create();
        Comment::factory(10)->create();


        // Post::truncate();
        // User::truncate();
        // Category::truncate();

        // $user = User::factory()->create();

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work',
        // ]);
        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family',
        // ]);
        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        // $post = Post::create([
        //     "title" => 'My First Article',
        //     "excerpt" => 'Lorem ipsum dolor sit amet',
        //     "body" => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit totam consequatur, officia alias debitis voluptates aperiam inventore necessitatibus error dolorem repellendus at optio iusto voluptatibus dolore. Totam excepturi dolores modi</p>',
        //     "slug" => 'my-first-article',
        //     "category_id" => $work->id,
        //     "user_id" => $user->id,
        // ]);

        // $post2 = Post::create([
        //     "title" => 'My Second Article',
        //     "excerpt" => 'Lorem ipsum dolor sit amet',
        //     "body" => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit totam consequatur, officia alias debitis voluptates aperiam inventore necessitatibus error dolorem repellendus at optio iusto voluptatibus dolore. Totam excepturi dolores modi</p>',
        //     "slug" => 'my-second-article',
        //     "category_id" => $family->id,
        //     "user_id" => $user->id,
        // ]);

        // $post3 = Post::create([
        //     "title" => 'My Third Article',
        //     "excerpt" => 'Lorem ipsum dolor sit amet',
        //     "body" => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit totam consequatur, officia alias debitis voluptates aperiam inventore necessitatibus error dolorem repellendus at optio iusto voluptatibus dolore. Totam excepturi dolores modi</p>',
        //     "slug" => 'my-third-article',
        //     "category_id" => $personal->id,
        //     "user_id" => $user->id,
        // ]);
    }
}
