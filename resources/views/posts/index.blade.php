@extends('layouts.layout')
@section('section')
    <div class="container">
        <h1> <strong>{{$user->name}}:</strong> Lista de Post</h1>
        <h2>
            <a href="{{route('users.posts.create', $user)}}" class="btn btn-primary pull-right">Nuevo</a>
        </h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Catogoria</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user->posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->name}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->category->name}}</td>
                    <td class="row">
                        <a href="{{route('users.posts.edit', array($user,$post))}}" class="col-12 col-lg-4 btn btn-warning btn-sm ml-5">Editar</a>
                        <form action="{{ route('users.posts.destroy', array($user, $post)) }}" class="col-12 col-lg-4" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
