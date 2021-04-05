@extends('layouts.layout')

@section('section')
    <h1>Editar</h1>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form action="{{ route('update', $note->id) }}" method="POST">
        @method('PUT')
        @csrf

        @error('title')
        <div class="alert alert-danger">
            El nombre es obligatorio
        </div>
        @enderror

        @error('description')
        <div class="alert alert-danger">
            La descripción es obligatoria
        </div>
        @enderror

        <input type="text" name="title" placeholder="Titulo" class="form-control mb-2" value="{{ $note->title }}">
        <input type="text" name="description" placeholder="Descripcion" class="form-control mb-2"
               value="{{ $note->description }}">
        <button class="btn btn-warning btn-block" type="submit">Editar</button>
    </form>
@endsection
