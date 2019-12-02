@csrf
<hr>
<div class="form-group">
    <label for="nombre_evento">Nombre del Evento</label>
    <input class="form-control bg-light shadow-sm @error('nombre_evento') is-invalid @else border-0 @enderror" type="text" id="nombre_evento" name="nombre_evento" value="{{ old('nombre_evento', $event->nombre_evento) }}">
    @error('nombre_evento')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="fecha_evento">Fecha del Evento</label>
    <input class="form-control bg-light shadow-sm @error('fecha_evento') is-invalid @else border-0 @enderror" type="date" id="fecha_evento" name="fecha_evento" value="{{ old('fecha_evento', $event->fecha_evento) }}">
    @error('fecha_evento')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="direccion">Dirección del Evento</label>
    <input class="form-control bg-light shadow-sm @error('direccion') is-invalid @else border-0 @enderror" type="text" id="direccion" name="direccion" value="{{ old('direccion', $event->direccion) }}">
    @error('direccion')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea class="form-control bg-light shadow-sm @error('descripcion') is-invalid @else border-0 @enderror" name="descripcion" id="descripcion" cols="30" rows="10">{{ old('descripcion', $event->descripcion) }}</textarea>
    @error('descripcion')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="capacidad">Capacidad</label>
    <input class="form-control bg-light shadow-sm @error('capacidad') is-invalid @else border-0 @enderror" type="number" id="capacidad" name="capacidad" value="{{ old('capacidad', $event->capacidad) }}">
    @error('capacidad')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="siglas">Siglas</label>
    <input class="form-control bg-light shadow-sm @error('siglas') is-invalid @else border-0 @enderror" type="text" id="siglas" name="siglas" value="{{ old('siglas', $event->siglas) }}">
    @error('siglas')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="costo">Costo</label>
    <input class="form-control bg-light shadow-sm @error('costo') is-invalid @else border-0 @enderror" type="number" id="costo" name="costo" value="{{ old('costo', $event->costo) }}">
    @error('costo')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="img">Portada</label>
    <input class="form-control bg-light shadow-sm @error('img') is-invalid @else border-0 @enderror" type="text" id="img" name="img" value="{{ old('img', $event->img) }}">
    @error('img')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>