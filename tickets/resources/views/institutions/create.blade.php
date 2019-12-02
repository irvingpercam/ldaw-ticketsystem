@extends('layout')
@section('title', 'Registrar Institucion')
@section('content')
    <h1>Registrar Institucion</h1>
    @include('partials.validation-errors')
    <form method="POST" action=" {{ route('institutions.store') }} " >
        @include('institutions._form', ['btnText' => 'Guardar'])
    </form>
@endsection