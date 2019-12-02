@extends('layout')
@section('title', 'Asistencia de Evento')
@section('content')
<div class="container">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            @include('partials.session-status')
            @include('partials.validation-errors')
            <form class="bg-white shadow rounded py-3 px-4"method="POST" action=" {{ route('events.takeAsistance', $event) }} " >
                @method('PATCH')
                <h1 class="display-6">Asistencia de Evento</h1>
                @include('events._asistanceform', ['btnText' => 'Pasar lista'])
                </form>
        </div>
    </div>
@endsection