@extends('layout')
@section('title', 'Contact')
@section('content')
    <h1>Contact</h1>
    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <input type="name" placeholder="Nombre..."><br>
        <input type="email" placeholder="Email..."><br>
        <input type="subject" placeholder="Asunto..."><br>
        <textarea name="content" cols="30" rows="10" placeholder="Mensaje..."></textarea><br>
        <button type="submit">Enviar</button>
    </form>
@endsection