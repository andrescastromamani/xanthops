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
        @can('users.create')
        <div class="row">
            <div class="col-12">
                <form action="{{route('users.import.excel')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(Session::has('message'))
                        <p>{{Session::get('message')}}</p>
                    @endif
                    <input class="col-lg-3" type="file" name="file">
                    <button class="btn btn-success col-lg-2">Importar Usuarios +</button>
                </form>
            </div>
        </div>
        @endcan
        <h1 class="">
            @can('users.create')
            <a href="{{ route('users.create') }}" class="btn btn-primary pull-right">Agregar +</a>
            @endcan
            <a href="{{ route('users.pdf') }}" class="btn btn-success pull-left">Exportar PDF</a>
            <a href="{{ route('users.excel' )}}" class="btn btn-primary pull-left">Exportar EXCEL</a>
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
                                class="col-12 col-lg-3 btn btn-warning btn-sm ml-5">Editar</a>
                            @endcan
                            @can('users.destroy')
                            <form action="{{ route('users.destroy', $user) }}" class="col-12 col-lg-3" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>@endcan
                                <a href="#" class="col-lg-3 btn btn-success btn-sm">Roles</a>
                            <a href="{{ route('users.posts.index', $user) }}"
                                class="col-12 col-lg-3 btn btn-primary btn-sm">Posts</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection
