@extends('layout')
@section('title', 'Instituciones')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4 mb-0">Instituciones</h1>
            <a class="btn btn-primary btn-lg text-white display-1" href="{{ route('institutions.create') }}">Registrar Institución</a>
        </div>
        <hr>
        <ul class="list-group">
            @forelse ($institutions as $institutionsItem)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="text-secondary d-flex justify-content-between"
                    href="{{ route('institutions.show', $institutionsItem)}}">
                    <span class="font-weight-bold">{{ $institutionsItem->nombre_institucion }}</span>
                    </form>
                    </a>
                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">No hay instituciones para mostrar</li>
            @endforelse
            {{ $institutions->links() }}
        </ul>
    </div>
@endsection