@extends('layout')

@section('titulo','crear proyectos')
@section('content')
<h1>Editar</h1>
@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="POST" action="{{route('portfolio.update', $project)}}">
    @csrf @method('PATCH')
    <label for="">
        Titulo del proyecto <br>
        <input type="text" name="title" value={{old('title'),$project->title}} >
    </label>
    <br>
    <label for="">
        Descripcion del proyecto <br>
        <textarea name="description" id="" cols="30" rows="10">{{old('description'),$project->description}}</textarea>
    </label>
    <br>
    <label for="">
        Url del proyecto <br>
        <input type="text" name="url" value={{old('url'),$project->url}}>
    </label>
    <br>
    <button>Actualizr</button>
</form>

@endsection