@extends('layout')
@section('title', 'Evento | ' . $event->nombre_evento)
@section('content')
    <h1>{{ $event->nombre_evento }}</h1>  
    <a href="{{ route('events.edit', $event)}}">Editar</a>
    <form action="{{ route('events.destroy', $event) }}" method="post">
        @csrf @method('DELETE')
        <button>Eliminar</button>
    </form>
        <p>{{ $event->descripcion }}</p>
        <p>{{ Carbon\Carbon::parse($event->fecha_evento)->format('Y-m-d') }}</p>
@endsection