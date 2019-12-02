@csrf
<hr>
    <div class="form-group">
        <label for="email">Email</label>
            <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" type="text" id="email" name="email" value="{{ old('email', $admin->email) }}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
    </div>
<br>
<button class="btn btn-primary btn-lg btn-block text-white">{{ $btnText }}</button>