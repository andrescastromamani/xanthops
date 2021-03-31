<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public  function  services(){
        return view('services');
    }
    public  function  team($name = null){
        $teamWork = ['Andres','Fidel','Rimer','Daniel','Ariel'];
        //return view('team',['teamWork'=>$teamWork]);
        return view('team',compact('teamWork', 'name'));
    }
}
