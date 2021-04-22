@extends('layout')

@section('titulo','crear proyectos')
@section('content')
<h1>Crear nuevo proyecto</h1>
@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="POST" action="{{route('portfolio.store')}}">
    @csrf
    <label for="">
        Titulo del proyecto <br>
        <input type="text" name="title">
    </label>
    <br>
    <label for="">
        Descripcion del proyecto <br>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </label>
    <br>
    <label for="">
        Url del proyecto <br>
        <input type="text" name="url">
    </label>
    <br>
    <button>Crear</button>
</form>

@endsection
