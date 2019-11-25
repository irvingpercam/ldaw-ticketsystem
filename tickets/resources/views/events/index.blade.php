@extends('layout')
@section('title', 'Events')
@section('content')
    <h1>{{ __('Events') }}</h1>
    <a href="{{ route('events.create') }}">Registrar Evento</a>
    <ul>
        @forelse ($events as $eventsItem)
            <li><a href="{{ route('events.show', $eventsItem)}}">{{ $eventsItem->nombre_evento }}</a></li>
            {{-- <li>{{ $eventsItem->nombre_evento }} <br><small>{{ $eventsItem->descripcion }}</small><br><small>{{ Carbon\Carbon::parse($eventsItem->fecha_evento)->format('Y-m-d') }}</small></li> --}}
        @empty
            <li>No hay eventos para mostrar</li>
        @endforelse
        {{ $events->links() }}
    </ul>
@endsection