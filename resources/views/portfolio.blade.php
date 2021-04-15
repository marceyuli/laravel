@extends('layout')

@section('titulo','contact')
@section('content')
<h1>Portfolio</h1>
    @forelse($portfolio as $portfolioItem)
        <li>{{$portfolioItem->title}}  </li>
    @empty
        <li>No hay proyectos para mostrar</li>
    @endforelse
@endsection
