@csrf
<label for="nombre_evento">Nombre del Evento<br>
    <input type="text" name="nombre_evento" value="{{ old('nombre_evento', $event->nombre_evento) }}">
</label>
<br>
<label for="fecha_evento">Fecha del Evento<br>
    <input type="date" name="fecha_evento" value="{{ old('fecha_evento', $event->fecha_evento) }}">
</label>
<br>
<label for="direccion">Dirección del Evento<br>
    <input type="text" name="direccion" value="{{ old('direccion', $event->direccion) }}">
</label>
<br>
<label for="descripcion">Descripción<br>
    <textarea name="descripcion" id="descripcion" cols="30" rows="10">{{ old('descripcion', $event->descripcion) }}</textarea>
</label>
<br>
<label for="capacidad">Capacidad<br>
    <input type="number" name="capacidad" value="{{ old('capacidad', $event->capacidad) }}">
</label>
<br>
<label for="siglas">Siglas<br>
    <input type="text" name="siglas" value="{{ old('siglas', $event->siglas) }}">
</label>
<br>
<button>{{ $btnText }}</button>