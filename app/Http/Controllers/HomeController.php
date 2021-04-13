<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        return view('home');
    }
    public  function  widgets(){
        return view('widgets');
    }
    public  function  layouts(){
        return view('layouts');
    }/*
    public function post($id){
        $user = App\User::findOrFail($id);
        return view('post', compact('user'));
    }
    public function create($id){
        $categories = App\Category::all();
        $user = App\User::findOrFail($id);
        return view('create',compact('user', 'categories'));
    }
    public function postcreate(Request $request){
        $newPost = App\Post;
        $newPost->name = $request->name;
        $newPost->title = $request->title;
        $newPost->description = $request->title;
        $newPost->status = $request->status;
        $newPost->category_id = $request->category;
        $newPost->save();
        return back();
    }*/
}
