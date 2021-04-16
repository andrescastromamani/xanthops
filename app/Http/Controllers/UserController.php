<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = App\User::paginate(10);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newUser = new User;
        $newUser->name = $request->name;
        $newUser->last_name = $request->last_name;
        $newUser->phone_number = $request->phone_number;
        $newUser->email = $request->email;
        $newUser->password =  Hash::make( $request->password);
        $newUser->save();
        return redirect()->route('users.index')->with('info', 'Usuario creado exitosamente!');
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
    public function edit($id)
    {
        $user = App\User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userUpdate = App\User::find($id);
        $userUpdate->name = $request->name;
        $userUpdate->last_name = $request->last_name;
        $userUpdate->phone_number = $request->phone_number;
        $userUpdate->email = $request->email;
        $userUpdate->password = Hash::make($request->password);
        $userUpdate->save();
        return redirect()->route('users.index')->with('info', 'Editado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userDelete = App\User::findOrFail($id);
        $userDelete->delete();
        return back()->with('info', 'Eliminado exitosamente!');
    }
}
