@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <label>
            <br>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>

        <br>
        <label>
            Categoría: 
            <br>
            <input type="text" name="categoria">
            <br>
            <button type="submit"> Enviar formulario</button>
        </label>
    </form>
@endsection