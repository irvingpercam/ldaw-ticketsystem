@extends('layout')
@section('title', 'Registrar Administrador')
@section('content')
<div class="container">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        @include('partials.validation-errors')
        <form class="bg-white shadow rounded py-3 px-4" method="POST" action=" {{ route('admins.store') }} " >
            <h1 class="display-6">Registrar Administrador</h1>
            @include('admins._formregister', ['btnText' => 'Guardar'])
        </form>
    </div>
</div>
@endsection