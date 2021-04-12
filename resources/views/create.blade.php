@extends('layouts.layout')

@section('section')
    <div class="container">
        <h1>Formulario de Post</h1>
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="name" placeholder="Nombre" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="title" placeholder="Titulo" aria-label="Last name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="description" placeholder="Descripcion" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control"  name="status" placeholder="Estado" aria-label="Last name">
                </div>
                <select  id="" class="col-12 form-select">
                    @foreach($categories as $category)
                        <option selected name="category">{{$category->name}}</option>
                    @endforeach
                </select>
                <div class="col-md-6 mt-5">
                    <button type="submit" class="btn btn-primary" href="">Crear</button>
                </div>
            </div>
        </form>
    </div>
@endsection
