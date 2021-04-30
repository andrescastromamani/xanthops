<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="{{asset('css/stylespdf.css')}}">-->
    <title>PDF</title>
</head>
<body>
<header>
    <h1 class="text-center">Imprimir PDF en laravel</h1>
</header>
<div class="container">
    <h1 class="text-center">Lista de Usuarios</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col text-center">#</th>
            <th scope="col text-center">Nombre</th>
            <th scope="col text-center">Apellido</th>
            <th scope="col text-center">Telefono</th>
            <th scope="col text-center">Email</th>
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
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
