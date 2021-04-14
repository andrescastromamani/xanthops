@extends('layouts.layout')

@section('section')
    <div class="container">
    <h1>Lista de Usuarios
        <a href="{{route('users.create')}}" class="btn btn-primary pull-right">Nuevo</a>
    </h1>
        @include('fragments.info')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Accion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->phone_number}}</td>
                <td>{{$user->email}}</td>
                <td class="row">
                    <a href="{{route('users.edit', $user)}}" class="col-12 col-lg-4 btn btn-warning btn-sm ml-5">Editar</a>
                    <form action="{{ route('users.destroy', $user) }}" class="col-12 col-lg-4" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                    <a href="{{route('users.posts.index', $user)}}" class="col-12 col-lg-4 btn btn-primary btn-sm">Posts</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
