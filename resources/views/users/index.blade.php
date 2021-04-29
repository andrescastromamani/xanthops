@extends('layouts.layout')

@section('section')
    <div class="container">
        <h1>Lista de Usuarios</h1>
        <div class="row">
            {!! Form::open(['route'=>'users.index','method'=>'GET']) !!}
                <div class="col-md-11 form-group">
                    {!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Buscar Usuarios']) !!}
                </div>
                <div class="col-md-1 form-group">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            {!! Form::close() !!}
        </div>
        <h1 class="">
            <a href="{{ route('users.create') }}" class="btn btn-primary pull-right">Agregar +</a>
            <a href="{{ route('pdfDownload') }}" class="btn btn-primary pull-left">Descargar Usuarios</a>
        </h1>

        @include('fragments.info')
        <table class="table table-striped">
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
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="row">
                            @can('users.edit')
                            <a href="{{ route('users.edit', $user) }}"
                                class="col-12 col-lg-4 btn btn-warning btn-sm ml-5">Editar</a>
                            @endcan
                            @can('users.destroy')
                            <form action="{{ route('users.destroy', $user) }}" class="col-12 col-lg-4" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                                @endcan
                                <a href="#" class="col-lg-2 btn btn-primary btn-sm">Roles</a>
                            <a href="{{ route('users.posts.index', $user) }}"
                                class="col-12 col-lg-2 btn btn-primary btn-sm">Posts</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection
