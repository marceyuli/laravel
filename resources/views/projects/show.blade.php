@extends('layout')

@section('title',$project->title)

@section('content')

<h1>{{$project->title}}</h1>

<a href="{{ route('portfolio.edit', $project )}}">Editar</a>
<form method="POST" action="{{route('portfolio.destroy',$project)}}">
    @csrf @method('DELETE')
    <button>Eliminar</button>
</form>
<p>{{$project->description}}</p>
<p>{{$project->created_at->diffForHumans()}}</p>

@endsection