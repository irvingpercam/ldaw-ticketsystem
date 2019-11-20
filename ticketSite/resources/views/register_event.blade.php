@extends('base')
@section('title', 'Registrar administrador')
@section('content')
<!-- Register Form -->
<div class="container">
    <h3>Regístrate</h3>
<form action="{{URL::to('/save_client')}}" method="POST">
        <label for="name">Fecha del evento:</label>
        <input type="text" class="datepicker" name="fecha_evento" value="" placeholder="Fecha Evento" autocomplete="off">
        <br>
        <label for="estado">Estado:</label>
        <input type="number" name="id_estado" value="0" placeholder="Institución" autocomplete="off">
        <br>
        <label for="institucion">Institución:</label>
        <input type="number" name="id_institucion" value="0" placeholder="Institución" autocomplete="off">
        <br>
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="correo" value="" placeholder="Correo electrónico" autocomplete="off">
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="contraseña" value="" placeholder="Contraseña" autocomplete="off">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <br>
        <br>
        <div class="container center">
            <button class="btn waves-effect waves-light deep-orange darken-2 center" type="submit" name="action">Registrarse
                    <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
    <br>
    <br>
</div>
<!-- End Register Form -->
@endsection