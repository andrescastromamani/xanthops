<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function contact(){
        return view('contact');
    }
    public function metrics(){
        return view('metrics');
    }
    public function inicio(){
        return view('inicio');
    }
    public function widgets()
    {
        return view('widgets');
    }
}
