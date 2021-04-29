<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Category;
use App\User;
use App\Post;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Categories*/
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        Category::truncate();
        $category = new Category();
        $category->name = "Categoría 1";
        $category->save();

        $category = new Category();
        $category->name = "Categoría 2";
        $category->save();

        $category = new Category();
        $category->name = "Categoría 3";
        $category->save();

        /*Posts*/

        Post::truncate();
        $post = new Post();
        $post->name = "Post 1";
        $post->title = "Titulo Post 1";
        $post->description = "Descripcion Post 1";
        $post->status = "Estado Post 1";
        $post->category_id = 1;
        $post->save();

        $post = new Post();
        $post->name = "Post 2";
        $post->title = "Titulo Post 2";
        $post->description = "Descripcion Post 2";
        $post->status = "Estado Post 2";
        $post->category_id = 2;
        $post->save();

        $post = new Post();
        $post->name = "Post 3";
        $post->title = "Titulo Post 3";
        $post->description = "Descripcion Post 3";
        $post->status = "Estado Post 3";
        $post->category_id = 3;
        $post->save();

        $post = new Post();
        $post->name = "Post 4";
        $post->title = "Titulo Post 4";
        $post->description = "Descripcion Post 4";
        $post->status = "Estado Post 4";
        $post->category_id = 3;
        $post->save();

        $post = new Post();
        $post->name = "Post 5";
        $post->title = "Titulo Post 5";
        $post->description = "Descripcion Post 5";
        $post->status = "Estado Post 5";
        $post->category_id = 3;
        $post->save();

        /*Users*/
        User::truncate();
        $user = new User();
        $user->name = "Andres";
        $user->last_name = "Castro";
        $user->phone_number = "67415949";
        $user->email = "andrescastro@gmail.com";
        $user->password = Hash::make('andrescastro');
        $user->save();
        $user->posts()->attach([1, 2]);

        $user = new User();
        $user->name = "Rimer";
        $user->last_name = "Castro";
        $user->phone_number = "4545656";
        $user->email = "rimercastro@gmail.com";
        $user->password = Hash::make('rimercastro');
        $user->save();
        $user->posts()->attach([3]);

        $user = new User();
        $user->name = "Ariel";
        $user->last_name = "Castro";
        $user->phone_number = "12545655";
        $user->email = "arielcastro@gmail.com";
        $user->password = Hash::make('arielcastro');
        $user->save();
        $user->posts()->attach([4]);

        $user = new User();
        $user->name = "Fidel";
        $user->last_name = "Castro";
        $user->phone_number = "32326656";
        $user->email = "fidelcastro@gmail.com";
        $user->password = Hash::make('fidelcastro');
        $user->save();
        $user->posts()->attach([5]);

        $user = new User();
        $user->name = "Jose Daniel";
        $user->last_name = "Castro";
        $user->phone_number = "454654545";
        $user->email = "danielcastro@gmail.com";
        $user->password = Hash::make('danielcastro');
        $user->save();
        $user->posts()->attach([1]);

    }
}
