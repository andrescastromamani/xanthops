@extends('layouts.layout')
@section('section')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Data Tables</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a>Tables</a>
                </li>
                <li class="active">
                    <strong>Data Tables</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Basic Data Tables example with responsive plugin</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    @if ( session('message') )
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <div class="ibox-content">
                        <form method="POST" action="">
                            @csrf
                            @error('title')
                            <div class="alert alert-danger " role="alert">
                                El Titulo es requerido
                            </div>
                            @enderror @if ($errors->has('description'))
                                <div class="alert alert-danger" role="alert">
                                    La descripción es requerida
                                </div>
                            @endif
                            <input type="text" name="title" placeholder="titulo" class="form-control mb-5" value="{{old('title')}}"/>
                            <input type="text" name="description" placeholder="Descripcion" class="form-control mb-2" value="{{old('description')}}"/>
                            <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                        </form>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nota</th>
                                    <th>Descripcion</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($notes as $note)
                                    <tr class="">
                                        <td>{{$note->id}}</td>
                                        <td>{{$note->title}}</td>
                                        <td>{{$note->description}}</td>
                                        <td>
                                            <a href="{{route('edit', $note)}}" class="btn btn-warning btn-sm">Editar</a>
                                            <form action="{{ route('delete', $note) }}" class="float-right" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$notes->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="pull-right">
            10GB of <strong>250GB</strong> Free.
        </div>
        <div>
            <strong>Copyright</strong> Example Company &copy; 2014-2017
        </div>
    </div>
@endsection
