@extends('layout')

@section('titulo','contact')
@section('content')
<h1>Portfolio</h1>
<a href="{{ route('portfolio.create') }}">Crear proyecto</a>
    @forelse($projects as $project)
        <li><a href="{{route('portfolio.show',$project)}}">{{$project->title}}</a></li>
    @empty
        <li>No hay proyectos para mostrar</li>
    @endforelse

@endsection
