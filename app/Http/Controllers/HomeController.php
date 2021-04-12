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

    public  function  widgets(){
        return view('widgets');
    }
    public  function  layouts(){
        return view('layouts');
    }
    public  function  table_basic(){
        return view('table_basic');
    }
    public  function  table_data(){
        $notes = App\Note::paginate(3);
        return view('table_data',compact('notes'));
    }
    /*Users*/
    public function index(){
        $users = App\User::all();
        return view('users.index', compact('users'));
    }
    public function edit($id){
        $user = App\User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id){
        $userUpdate = App\User::find($id);
        $userUpdate->name = $request->name;
        $userUpdate->last_name = $request->last_name;
        $userUpdate->phone_number = $request->phone_number;
        $userUpdate->email = $request->email;
        $userUpdate->save();
        return back()->with('message', 'Usuario editado exitosamente!');
    }
    public function destroy($id){
            $userDelete = App\User::findOrFail($id);
            $userDelete->delete();
            return back()->with('message', 'Usuario eliminado exitosamente!');
    }

    /*Posts*/
    public function post($id){
        $user = App\User::findOrFail($id);
        return view('post', compact('user'));
    }
}
