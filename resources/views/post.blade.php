@extends('layouts.layout')
@section('section')
    <div class="container">
        <h1>Lista de Post</h1>
        <span>{{$user->id}}</span>
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
                    <a href="" class="col-12 col-lg-4 btn btn-warning btn-sm ml-5">Editar</a>
                    <form action="" class="col-12 col-lg-4" method="POST">
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
