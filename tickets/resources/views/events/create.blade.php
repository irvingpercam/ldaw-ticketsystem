@extends('layout')
@section('title', 'Registrar Evento')
@section('content')
<div class="container">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        @include('partials.validation-errors')
        <form class="bg-white shadow rounded py-3 px-4" method="POST" action=" {{ route('events.store') }} " >
            <h1 class="display-6">Registrar Evento</h1>
            @include('events._form', ['btnText' => 'Guardar'])
        </form>
    </div>
</div>

@endsection