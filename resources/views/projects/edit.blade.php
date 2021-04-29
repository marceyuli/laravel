@extends('layout')

@section('titulo','crear proyectos')
@section('content')
<h1>Editar</h1>

@include('partials/validation-errors')

<form method="POST" action="{{route('portfolio.update', $project)}}">
    @csrf @method('PATCH')

    @include('projects/_form')
    
    <button>Actualizr</button>
</form>

@endsection