@extends('layout')
@section('title', 'Institución | ' . $institution->nombre_institucion)
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            <div class="bg-white shadow rounded py-3 px-4">
                <h1 class="display-6 mb-0">{{ $institution->nombre_institucion }}</h1><hr>
                <div class="form-group">
                    <a class="btn btn-primary btn-lg btn-block text-white display-1" href="{{ route('institutions.edit', $institution)}}">Editar</a>
                </div>
                <div class="form-group">
                    <form action="{{ route('institutions.destroy', $institution) }}" method="post">
                        @csrf @method('DELETE')
                        <button class="btn btn-primary btn-lg btn-block text-white display-1">Eliminar</button>
                    </form>
                </div>
                <div class="form-group">
                    <div class="map-responsive"><iframe width="500vw" height="500vh" src="https://maps.google.com/maps?width=NaN&amp;height=NaN&amp;hl=en&amp;q={{$institution->nombre_institucion}}&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a></iframe></div><br />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection