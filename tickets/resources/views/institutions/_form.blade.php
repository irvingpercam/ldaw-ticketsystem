@csrf
<hr>
    <div class="form-group">
        <label for="nombre_institucion">Nombre de la Institucion</label>
            <input class="form-control bg-light shadow-sm @error('nombre_institucion') is-invalid @else border-0 @enderror" type="text" id="nombre_institucion" name="nombre_institucion" value="{{ old('nombre_institucion', $institution->nombre_institucion) }}">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
    </div>
<br>
<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>