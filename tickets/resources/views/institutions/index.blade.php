@extends('layout')
@section('title', 'Instituciones')
@section('content')
    <div class="container">
        <h1 class="display-4">Instituciones</h1>
        <a class="btn btn-primary btn-lg text-white display-1" href="{{ route('institutions.create') }}">Registrar Institución</a>
        <ul>
            @forelse ($institutions as $institutionsItem)
                <li><a href="{{ route('institutions.show', $institutionsItem)}}">{{ $institutionsItem->nombre_institucion }}</a></li>
            @empty
                <li>No hay instituciones para mostrar</li>
            @endforelse
        </ul>
    </div>
@endsection