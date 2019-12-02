@csrf
<label for="nombre_institucion">Nombre de la Institucion<br>
    <input type="text" name="nombre_institucion" value="{{ old('nombre_institucion', $institution->nombre_institucion) }}">
</label>
<br>
<button>{{ $btnText }}</button>