@extends('layout')
@section('title', 'Events')
@section('content')
    <h1>Events</h1>
    <ul>
        @forelse ($events as $eventsItem)
            <li>{{ $eventsItem['title'] }}</li>
        @empty
            <li>No hay eventos para mostrar</li>
        @endforelse
    </ul>
@endsection