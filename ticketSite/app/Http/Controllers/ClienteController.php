<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Usuario;
use App\RolUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the usuario
        $cliente = Cliente::all();

        // load the view and pass the usuario
        return $cliente;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //REGISTRAR CLIENTE
    public function store(Request $request)
    {
        if (!$request->correo || !$request->contrasena || !$request->nombre_cliente)
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

        $cliente = new Cliente;
        $cliente->id_usuario = $usuario->id_usuario;
        $cliente->nombre_cliente = $request->nombre_cliente;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->id_estado = $request->id_estado;
        $cliente->id_institucion = $request->id_institucion;
        $cliente->save();

        $rol_usuario = new RolUsuario;
        //Declaramos el nombre con el nombre enviado en el request
        $rol_usuario->id_rol= 2;
        $rol_usuario->id_usuario = $usuario->id_usuario;
        //Guardamos el cambio en nuestro modelo
        $rol_usuario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Solicitamos la usuario con el id solicitado por GET.
        return Cliente::where('id_usuario', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
