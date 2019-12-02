@extends('layout')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-3 mx-auto">{{ __('Bienvenido a ') }}{{config('app.name')}}</h1>
    </div><br>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a class="btn btn-primary btn-lg text-white mx-auto" href="{{route('events.index')}}">Eventos</a>
    </div>
</div>
@endsection