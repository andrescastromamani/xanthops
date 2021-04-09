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
    public function index()
    {
        return view('home');
    }
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
    public function create(Request $request){
        //return $request;
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $newNote = new App\Note;
        $newNote->title = $request->title;
        $newNote->description = $request->description;

        $file = $request->file('image');
        $destinationPath = 'img/images/';
        $filename = $file->getClientOriginalName();
        $uploadSuccess = $request->file('image')->move($destinationPath,$filename);
        $newNote->image = $destinationPath . $filename;
        $newNote->save();

        return back()->with('message', 'Nota agregada correctamente!');
    }
    public function edit($id){
        $note = App\Note::findOrFail($id);
        return view('edit', compact('note'));
    }
    public function update(Request $request, $id){
        $noteUpdate = App\Note::find($id);
        $noteUpdate->title = $request->title;
        $noteUpdate->description = $request->description;

        $file = $request->file('image');
        $destinationPath = 'img/images/';
        $filename = $file->getClientOriginalName();
        $uploadSuccess = $request->file('image')->move($destinationPath,$filename);
        $noteUpdate->image = $destinationPath . $filename;
        $noteUpdate->save();
        return back()->with('message', 'Nota editada correctamente!');
    }
    public function delete($id){
        $noteDelete = App\Note::findOrFail($id);
        $noteDelete->delete();
        return back()->with('message', 'Nota Eliminada Exitosamente!');
    }

    /*Users*/
    public function users_list(){
        $users = App\User::all();
        return view('users_list', compact('users'));
    }
    public function user_edit($id){
        $user = App\User::findOrFail($id);
        return view('user_edit', compact('user'));
    }
    public function user_update(Request $request, $id){

        $userUpdate = App\User::find($id);
        $userUpdate->name = $request->name;
        $userUpdate->last_name = $request->last_name;
        $userUpdate->phone_number = $request->phone_number;
        $userUpdate->email = $request->email;
        $userUpdate->save();
        return back()->with('message', 'Usuario editado exitosamente!');
    }
    public function user_delete($id){
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
