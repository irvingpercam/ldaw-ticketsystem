@extends('layout')
@section('title', 'Editar Evento')
@section('content')
    <h1>Editar Evento</h1>
    @include('partials.session-status')
    @include('partials.validation-errors')
    <form method="POST" action=" {{ route('events.update', $event) }} " >
        @method('PATCH')
        @include('events._form', ['btnText' => 'Actualizar'])
    </form>
@endsection