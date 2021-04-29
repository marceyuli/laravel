@extends('layout')

@section('titulo','crear proyectos')
@section('content')
<h1>Crear nuevo proyecto</h1>

@include('partials/validation-errors')

<form method="POST" action="{{route('portfolio.store')}}">
    @csrf

    @include('projects/_form')

    <button>Crear</button>
</form>

@endsection
