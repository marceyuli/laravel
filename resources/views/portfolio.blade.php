@extends('layout')

@section('titulo','contact')
@section('content')
<h1>Portfolio</h1>
    @forelse($projects as $project)
        <li>{{$project->title}}  </li>
    @empty
        <li>No hay proyectos para mostrar</li>
    @endforelse
    
@endsection
