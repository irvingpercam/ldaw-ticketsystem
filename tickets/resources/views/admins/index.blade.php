@extends('layout')
@section('title', 'Administradores')
@section('content')
@php
    $admins = Illuminate\Support\Facades\DB::select('select U.id, U.name, U.email, R.nombre_rol from users U, rol R, rol_user Re where U.id = Re.user_id AND Re.rol_id = R.id AND R.nombre_rol = :nombre_rol', ['nombre_rol' => 'admin']);
    $admins= json_decode( json_encode($admins), true);
@endphp
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4 mb-0">Administradores</h1>
            <a class="btn btn-primary btn-lg text-white display-1" href="{{ route('admins.create') }}">Registrar Administrador</a>
        </div>
        <hr>
        <ul class="list-group">
            @forelse ($admins as $adminsItem)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="text-secondary d-flex justify-content-between"
                    href="{{ route('admins.show', $adminsItem['id'])}}">
                    <span class="font-weight-bold">{{ $adminsItem['email'] }}</span>
                    </form>
                    </a>
                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">No hay administradores para mostrar</li>
            @endforelse
            {{-- {{ $admins->links() }} --}}
        </ul>
    </div>
@endsection