@extends('layout')
@section('title', 'Institución | ' . $institution->nombre_institucion)
@section('content')
    <h1>{{ $institution->nombre_institucion }}</h1>  
    <a href="{{ route('institutions.edit', $institution)}}">Editar</a>
    <form action="{{ route('institutions.destroy', $institution) }}" method="post">
        @csrf @method('DELETE')
        <button>Eliminar</button>
    </form>
@endsection