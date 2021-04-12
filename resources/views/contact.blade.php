@extends('layout')

@section('titulo','contact')
@section('content')
<h1>Contact</h1>
    <form method="POST" action="{{route('contact')}}">
        @csrf
        <input name="name" placeholder="Nombre...." value="{{old('name')}}"><br>
        {!!$errors->first('name','<small>:message</small><br>')!!}

        <input type="email" name="email" placeholder="Email..." value="{{old('email')}}"><br>
        {!!$errors->first('email','<small>:message</small><br>')!!}

        <input name="subject" placeholder="Asunto...." value="{{old('subject')}}"><br>
        {!!$errors->first('subject','<small>:message</small><br>')!!}

        <textarea name="content" placeholder="Mensaje..." value="{{old('content')}}"></textarea><br>
        {!!$errors->first('content','<small>:message</small><br>')!!}

        <button>Enviar</button>
    </form>
@endsection
