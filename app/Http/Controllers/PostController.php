<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = App\User::findOrFail($id);
        return Post::active()->get();
        return view('posts.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $category = App\Category::all();
        $user = App\User::findOrFail($id);
        return view('posts.create', compact('user', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {
        $user = App\User::findOrFail($id);
        $newPost = new Post;
        $newPost->name = $request->name;
        $newPost->title = $request->title;
        $newPost->description = $request->description;
        $newPost->status = $request->status;
        $newPost->category_id = $request->category_id;
        $newPost->save();
        $post = App\Post::latest('id')->first();
        $user->posts()->attach($post);
        return redirect()->route('users.posts.index', $user)->with('info', 'Post creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_user, $id_post)
    {
        $category = App\Category::all();
        $user = App\User::findOrFail($id_user);
        $post= App\Post::findOrFail($id_post);
        return view('posts.edit',compact('user','post', 'category'));
    }

    /*
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user, $id_post)
    {
        $user = App\User::findOrFail($id_user);
        $postUpdate = App\Post::find($id_post);
        $postUpdate->name = $request->name;
        $postUpdate->title = $request->title;
        $postUpdate->description = $request->description;
        $postUpdate->status = $request->status;
        $postUpdate->category_id = $request->category_id;
        $postUpdate->save();
        return redirect()->route('users.posts.index' , $user)->with('info', 'Editado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = App\User::findOrFail($id);
        $postDelete = App\Post::findOrFail($id);
        $postDelete->delete();
        $post = App\Post::latest('id')->first();
        $user->posts()->detach($post);
        return back()->with('info', 'Eliminado exitosamente!');
    }
}
