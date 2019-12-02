@extends('layout')
@section('title', 'Editar Administrador')
@section('content')
<div class="container">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        @include('partials.session-status')
        @include('partials.validation-errors')
        <form class="bg-white shadow rounded py-3 px-4" method="POST" action=" {{ route('admins.update', $admin) }} " >
            @method('PATCH')
            <h1 class="display-6">Editar Administrador</h1>
            @include('admins._form', ['btnText' => 'Actualizar'])
        </form>
    </div>
</div>
@endsection