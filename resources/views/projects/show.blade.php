@extends('layout')

@section('title',$project->title)

@section('content')

<h1>{{$project->title}}</h1>

<a href="{{ route('portfolio.edit', $project )}}">Editar</a>
<p>{{$project->description}}</p>
<p>{{$project->created_at->diffForHumans()}}</p>

@endsection