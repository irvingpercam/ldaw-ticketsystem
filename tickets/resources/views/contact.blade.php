@extends('layout')
@section('title', 'Contact')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store') }}">
                @csrf
                <h1 class="display-4">@lang('Contact')</h1>
                <hr>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" id="name" name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                    <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" type="email" id="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" id="subject" name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
                    @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                        <label for="content">Mensaje</label>
                    <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror" id="content" name="content" cols="30" rows="10" placeholder="Mensaje..." value="{{ old('content') }}"></textarea><br>
                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
            </form>
        </div>
    </div>
</div>
<a href="https://api.whatsapp.com/send?phone=524422660863&text=Hola, estoy contactandolo desde la pagina de Tickets." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
@endsection