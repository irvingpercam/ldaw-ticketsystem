@extends('base')
@section('title', 'Registrar administrador')
@section('content')
<!-- Register Form -->
<div class="container">
    <h3>Registrar Administrador</h3>
<form action="{{URL::to('/save_admin')}}" method="POST">
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="correo" value="" placeholder="Correo electrónico" autocomplete="off">
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="contrasena" value="" placeholder="Contraseña" autocomplete="off">
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
    <br>
</div>
<!-- End Register Form -->
@endsection