@extends('layout')
@section('title', 'Evento | ' . $event->nombre_evento)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            <div class="bg-white shadow rounded py-3 px-4">
                <h1 class="display-6 mb-0">{{ $event->nombre_evento }}</h1><hr>
                <div class="form-group d-flex justify-content-between align-items-center">
                    <img class="responsive" src="@if($event->img){{$event->img}}@else https://i.pinimg.com/originals/d1/89/2d/d1892de1edd10f40e9edf9cb54d37fd8.jpg @endif" alt="">
                </div>
                <div class="form-group">
                    <a class="btn btn-primary btn-lg btn-block text-white display-1" href="{{ route('events.edit', $event)}}">Editar</a>
                </div>
                <div class="form-group">
                    <form action="{{ route('events.destroy', $event) }}" method="post">
                        @csrf @method('DELETE')
                        <button class="btn btn-primary btn-lg btn-block text-white display-1">Eliminar</button>
                    </form>
                </div>
                <div class="form-group">
                    <a class="btn btn-primary btn-lg btn-block text-white display-1" href="{{ route('events.asistance', $event) }}">Pasar lista</a>
                </div><br>
                <div class="form-group">
                    <h3 class="text-secondary">Descripción:</h6><br>
                    <p class="text-black-50 text-justify">{{ $event->descripcion }}</p><br>
                    <h3 class="text-secondary">Fecha del Evento:</h6><br>
                    <p class="text-black-50 text-justify">{{ Carbon\Carbon::parse($event->fecha_evento)->translatedFormat('j \d\e F, Y') }}</p>
                    <h3 class="text-secondary">Lugar:</h6><br>
                    <p class="text-black-50 text-justify">El evento se llevará a cabo en {{ $event->direccion }}.</p><br>
                    <h3 class="text-secondary">Capacidad:</h6><br>
                    <p class="text-black-50 text-justify">El evento cuenta con capacidad para {{ $event->capacidad }} personas.</p><br>
                    <h3 class="text-secondary">Costo:</h6><br>
                    <p class="text-black-50 text-justify">${{ $event->costo }} M.N.</p><br>
                    <h3 class="text-secondary">Mapa:</h3>
                </div>
                <div class="form-group">
                    <div class="map-responsive"><iframe width="500vw" height="500vh" src="https://maps.google.com/maps?width=NaN&amp;height=NaN&amp;hl=en&amp;q={{$event->direccion}}&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a></iframe></div><br />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection