<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use App\Category;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $user = new User();
        $user->name = "fidel";
        $user->last_name = "castro";
        $user->phone_number = "65445454";
        $user->email = "fidel@gmail.com";
        $user->password = "fidelcastro";
        $user->save();

        User::truncate();
        $user = new User();
        $user->name = "Rimer";
        $user->last_name = "castro";
        $user->phone_number = "654455584";
        $user->email = "rimer@gmail.com";
        $user->password = "rimercastro";
        $user->save();

        Post::truncate(); // Evita duplicar datos
        $post = new Post();
        $post->name = "Post 2";
        $post->title = "title Post 2";
        $post->subtitle= "subtitle Post 2";
        $post->description = "description Post 2";
        $post->status = "status Post 2";
        $post->category_id = 1;
        $post->save();


        Post::truncate(); // Evita duplicar datos
        $post = new Post();
        $post->name = "Post 3";
        $post->title = "title Post  3";
        $post->subtitle= "subtitle Post  3";
        $post->description = "description Post  3";
        $post->status = "status Post  3";
        $post->category_id = 1;
        $post->save();

        Category::truncate();
        $category = new Category();
        $category->name = "Categoria 1";
        $category->save();

        Category::truncate();
        $category = new Category();
        $category->name = "Categoria 2";
        $category->save();

        Category::truncate();
        $category = new Category();
        $category->name = "Categoria 3";
        $category->save();
    }
}
