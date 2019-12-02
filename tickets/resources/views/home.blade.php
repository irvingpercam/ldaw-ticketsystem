@extends('layout')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-3 mx-auto">{{ __('Bienvenido a ') }}{{config('app.name')}}</h1>
    </div><br>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a class="btn btn-primary btn-lg text-white mx-auto" href="{{route('events.index')}}">Eventos</a>
    </div>
</div>
{{auth()->user()}}
{{Auth::user()->roles->pluck('nombre_rol')}}
{{-- <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-6 mb-0">{{ __('Bienvenido a ') }}{{config('app.name')}}</h1>
    </div><hr>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-5 mx-auto">
                <div class="bg-white shadow rounded py-3 px-4">
                    <div class="form-group">
                            @php
                            $events= App\Evento::latest('fecha_evento')->paginate()
                            @endphp
                            @if ($events)
                            <div class="container my-4">
                                <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @forelse ($events as $eventsItem)
                                        @if ($eventsItem == $events[0])
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="@if($eventsItem->img){{$eventsItem->img}}@else https://i.pinimg.com/originals/d1/89/2d/d1892de1edd10f40e9edf9cb54d37fd8.jpg @endif" alt="{{$eventsItem->nombre_evento}}">
                                            </div>
                                        @else
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="@if($eventsItem->img){{$eventsItem->img}}@else https://i.pinimg.com/originals/d1/89/2d/d1892de1edd10f40e9edf9cb54d37fd8.jpg @endif" alt="{{$eventsItem->nombre_evento}}">
                                            </div>
                                        @endif
                                        @empty
                                        <h3 class="display-6">No hay eventos para mostrar</h3>
                                        @endforelse
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            @else
                                <h3 class="display-6">No hay eventos para mostrar</h3>
                            @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <p class="text-black text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non animi vitae quas enim accusamus? Necessitatibus perspiciatis error quam tempora eius incidunt consectetur nemo, doloremque alias? Quisquam itaque corrupti ut facere voluptate adipisci, sit modi quod labore quam vero officiis ad laboriosam odio quasi? Deserunt provident exercitationem vel eos nostrum officiis nobis perspiciatis temporibus natus, ducimus molestias saepe, ab ipsam eligendi adipisci! Fugit eligendi ipsam amet minus dolorum officiis tenetur ut sequi voluptatum quia dicta suscipit incidunt temporibus nulla quaerat voluptas, reiciendis nisi sapiente! Vero ab quae ipsum cupiditate dolore doloribus delectus commodi, facere inventore similique quisquam nemo quia nihil laudantium?</p>
        </div>
    </div>
</div> --}}
@endsection