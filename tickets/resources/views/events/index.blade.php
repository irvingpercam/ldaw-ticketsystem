@extends('layout')
@section('title', 'Events')
@section('content')
    <div class="container">
        <h1 class="display-4">{{ __('Events') }}</h1>
        {{-- @auth --}}
        <a class="btn btn-primary btn-lg text-white display-1" href="{{ route('events.create') }}">Registrar Evento</a>
        {{-- @endauth --}}
        <br><br>
        <div class="row">
                @forelse ($events as $eventsItem)
                <div class="col">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                              <div class="col-md-4">
                                <img src="https://i.pinimg.com/originals/d1/89/2d/d1892de1edd10f40e9edf9cb54d37fd8.jpg" class="card-img" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">{{$eventsItem->nombre_evento}}</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">{{ Carbon\Carbon::parse($eventsItem->fecha_evento)->translatedFormat('j \d\e F, Y') }}</h6>
                                  <p class="card-text">Descripción:<br>{{$eventsItem->descripcion}}</p>
                                  <a href="{{ route('events.show', $eventsItem)}}" class="btn btn-primary btn-lg btn-block text-white">Ver detalles</a>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                @empty
                <p>No hay eventos para mostrar</p>
                @endforelse
                {{ $events->links() }}
        </div>
    </div>
@endsection