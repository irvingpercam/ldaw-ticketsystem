@csrf
<div class="form-group">
    <label for="codigo">Codigo Boleto</label>
        <input class="form-control bg-light shadow-sm @error('nombre_institucion') is-invalid @else border-0 @enderror" type="number" id="codigo" name="codigo">
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<br>
<button class="btn btn-primary btn-lg btn-block text-white">{{ $btnText }}</button>