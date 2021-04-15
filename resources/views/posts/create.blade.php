@extends('layouts.layout')
@section('section')
    <div class="container">
        <h2>{{$user->name}}</h2>
        <h1>Crear Posts
            <a href="{{route('users.posts.index', $user)}}" class="btn btn-primary pull-right">Listado</a>
        </h1>
        @include('fragments.info')
        <form class="row g-3" action="{{route('users.posts.store', $user)}}" method="POST">
            @csrf
            <div class="col-md-8">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="col-md-8">
                <label for="title" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="col-md-8">
                <label for="description" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="col-md-8">
                <label for="status" class="form-label">estatus</label>
                <input type="text" class="form-control" id="status" name="status">
            </div>
            <div class="col-md-8">
                <label for="category_id" class="form-label">Categoria</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    @foreach($category as $cat)
                        <option value="{{$cat->id}}" >{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-8 mt-5">
                <button type="submit" class="btn btn-primary" href="">Guardar</button>
            </div>
        </form>
    </div>
@endsection

