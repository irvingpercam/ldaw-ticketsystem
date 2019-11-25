@extends('layout')
@section('title', 'Evento | ' . $event->nombre_evento)
@section('content')
    <h1>{{ $event->nombre_evento }}</h1>  
        <p>{{ $event->descripcion }}</p>
        <p>{{ Carbon\Carbon::parse($event->fecha_evento)->format('Y-m-d') }}</p>
@endsection