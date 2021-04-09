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
            </tr>
            </thead>
            <tbody>
            @foreach($user->posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->name}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->category_id}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
