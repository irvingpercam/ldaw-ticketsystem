@extends('layout')
@section('title', 'Registrar Evento')
@section('content')
    <h1>Registrar Evento</h1>
    @include('partials.validation-errors')
    <form method="POST" action=" {{ route('events.store') }} " >
        @include('events._form', ['btnText' => 'Guardar'])
    </form>
@endsection