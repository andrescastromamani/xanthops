@extends('layouts.layout')
@section('section')
    <div class="container">
        <h1>{{$user->name}}</h1>
        @include('fragments.info')
        <form class="row g-3" action="{{route('users.posts.update', array($user,$post))}}" method="POST">
            @method('PUT')
            @csrf
            <div class="col-md-8">
                <label for="inputEmail4" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="inputEmail4" name="name" value="{{ $post->name}}">
            </div>
            <div class="col-md-8">
                <label for="inputPassword4" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="inputPassword4" name="title" value="{{ $post->title }}">
            </div>
            <div class="col-md-8">
                <label for="inputEmail4" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="inputEmail4" name="description" value="{{ $post->description }}">
            </div>
            <div class="col-md-8">
                <label for="inputPassword4" class="form-label">estatus</label>
                <input type="text" class="form-control" id="inputPassword4" name="status" value="{{ $post->status }}">
            </div>
            <div class="col-md-8">
                <label for="inputPassword4" class="form-label">Categoria</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    @foreach($user->posts as $post)
                        <option value="{{$post->category->id}}">{{$post->category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-8 mt-5">
                <button type="submit" class="btn btn-primary" href="">Guardar</button>
            </div>
        </form>
    </div>
@endsection

