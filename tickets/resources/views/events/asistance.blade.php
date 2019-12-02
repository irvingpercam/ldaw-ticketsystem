@extends('layout')
@section('title', 'Asistencia de Evento')
@section('content')
    <h1>Asistencia de Evento</h1>
    @include('partials.session-status')
    @include('partials.validation-errors')
    <form method="POST" action=" {{ route('events.takeAsistance', $event) }} " >
        @method('PATCH')
        @include('events._asistanceform', ['btnText' => 'Pasar lista'])
    </form>
@endsection