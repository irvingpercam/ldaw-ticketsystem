@extends('layout')
@section('title', 'Registrar Evento')
@section('content')
    <h1>Registrar Evento</h1>
    
    <form method="POST" action=" {{ route('events.store') }} " >
        @csrf
        <label for="nombre_evento">Nombre del Evento<br>
            <input type="text" name="nombre_evento" required>
        </label>
        <br>
        <label for="fecha_evento">Fecha del Evento<br>
            <input type="date" name="fecha_evento" required>
        </label>
        <br>
        <label for="direccion">Dirección del Evento<br>
            <input type="text" name="direccion" required>
        </label>
        <br>
        <label for="descripcion">Descripción<br>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
        </label>
        <br>
        <label for="capacidad">Capacidad<br>
            <input type="number" name="capacidad" required>
        </label>
        <br>
        <label for="siglas">Siglas<br>
            <input type="text" name="siglas" required>
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection