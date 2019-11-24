<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\RolUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //REGISTRAR ADMIN
    public function store(Request $request)
    {
        if (!$request->correo || !$request->contrasena)
        {
            return response()->json(['errors'=>array(['code'=>422,'message'=>'Favor de llenar los campos requeridos'])],422);
        }
        //Instanciamos la clase Usuario
        $usuario = new Usuario;
        //Declaramos el nombre con el nombre enviado en el request
        $usuario->correo= $request->correo;
        $usuario->contrasena= Hash::make($request->contrasena);
        //Guardamos el cambio en nuestro modelo
        $usuario->save();

        $rol_usuario = new RolUsuario;
        //Declaramos el nombre con el nombre enviado en el request
        $rol_usuario->id_rol= 1;
        $rol_usuario->id_usuario = $usuario->id_usuario;
        //Guardamos el cambio en nuestro modelo
        $rol_usuario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Solicitamos la usuario con el id solicitado por GET.
        return Usuario::where('id_usuario', $id)->get();
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
