@extends('layout')
@section('title', 'Editar Institucion')
@section('content')
    <h1>Editar Institucion</h1>
    @include('partials.session-status')
    @include('partials.validation-errors')
    <form method="POST" action=" {{ route('institutions.update', $institution) }} " >
        @method('PATCH')
        @include('institutions._form', ['btnText' => 'Actualizar'])
    </form>
@endsection