@extends('layouts.layout')
@section('section')
    <div class="container">
        <h1>Pagina de Edicion
            <a href="{{route('users.index')}}" class="btn btn-primary pull-right">Listado</a>
        </h1>
        @include('fragments.info')
        <form class="row g-3" action="{{ route('users.update', $user->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="col-md-8">
                <label for="inputEmail4" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="inputEmail4" name="name" value="{{ $user->name }}">
            </div>
            <div class="col-md-8">
                <label for="inputPassword4" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="inputPassword4" name="last_name" value="{{ $user->last_name }}">
            </div>
            <div class="col-md-8">
                <label for="inputEmail4" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="inputEmail4" name="phone_number" value="{{ $user->phone_number }}">
            </div>
            <div class="col-md-8">
                <label for="inputPassword4" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputPassword4" name="email" value="{{ $user->email }}">
            </div>
            <div class="col-md-8">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password" value="">
            </div>
            <div class="col-md-8 mt-5">
                <button type="submit" class="btn btn-primary" href="">Guardar</button>
            </div>
        </form>
    </div>
@endsection
