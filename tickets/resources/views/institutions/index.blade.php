@extends('layout')
@section('title', 'Instituciones')
@section('content')
    <h1>Instituciones</h1>
    <a href="{{ route('institutions.create') }}">Registrar Institucion</a>
    <ul>
        @forelse ($institutions as $institutionsItem)
            <li><a href="{{ route('institutions.show', $institutionsItem)}}">{{ $institutionsItem->nombre_institucion }}</a></li>
        @empty
            <li>No hay instituciones para mostrar</li>
        @endforelse
    </ul>
@endsection