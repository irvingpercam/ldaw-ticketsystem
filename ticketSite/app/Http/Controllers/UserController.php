<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
class UserController extends Controller{
    public function save_client(request $request){
        print_r($request->input());
        $nombre_cliente = $request->input('nombre_cliente');
        $id_estado = $request->input('id_estado');
        $id_institucion = $request->input('id_institucion');
        $correo = $request->input('correo');
        $contraseña = $request->input('contraseña');
        echo DB::insert('insert into users(id_usuario,nombre_cliente,id_estado,id_institucion,correo,contraseña) values(?,?,?,?,?,?)', [null,$nombre_cliente,$id_estado,$id_institucion,$correo,$contraseña]);
        
    }
}