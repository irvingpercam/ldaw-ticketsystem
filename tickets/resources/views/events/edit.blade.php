@extends('layout')
@section('title', 'Editar Evento')
@section('content')
<div class="container">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        @include('partials.session-status')
        @include('partials.validation-errors')
        <form class="bg-white shadow rounded py-3 px-4" method="POST" action=" {{ route('events.update', $event) }} " >
            @method('PATCH')
            <h1 class="display-6">Editar Evento</h1>
            @include('events._form', ['btnText' => 'Actualizar'])
        </form>
    </div>
</div>
@endsection