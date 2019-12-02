@extends('layout')
@section('title', 'Institución | ' . $admin['email'])
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            <div class="bg-white shadow rounded py-3 px-4">
                <h1 class="display-6 mb-0">{{ $admin['email'] }}</h1><hr>
                <div class="form-group">
                    <a class="btn btn-success btn-lg btn-block text-white display-1" href="{{ route('admins.edit', $admin)}}">Editar</a>
                </div>
                <div class="form-group">
                    <form action="{{ route('admins.destroy', $admin) }}" method="post">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-lg btn-block text-white display-1">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection