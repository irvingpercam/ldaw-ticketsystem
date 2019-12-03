@csrf
<hr>
    <div class="form-group">
        <label for="email">Email</label>
            <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" type="email" id="email" name="email" value="{{ old('email')}}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control bg-light shadow-sm @error('password') is-invalid @else border-0 @enderror" type="password" id="password" name="password" value="{{ old('password')}}">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
    </div>
<br>
<button class="btn btn-primary btn-lg btn-block text-white">{{ $btnText }}</button>