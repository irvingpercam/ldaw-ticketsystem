<?php

namespace App\Http\Controllers;

use App\Boleto;
use Illuminate\Http\Request;

class BoletoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the boleto
        $boleto = Boleto::all();

        // load the view and pass the boleto
        return $boleto;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buy($id_usuario, $id_evento)
    {
        $boleto = new Boleto;
        $boleto->id_usuario = $id_usuario;
        $boleto->id_evento = $id_evento;
        $boleto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function show(Boleto $boleto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function edit(Boleto $boleto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    //PASAR ASISTENCIA
    public function update($id)
    {
        $boleto = Boleto::find($id);

        if (!$boleto)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'El elemento no existe.'])],404);
        }

        $boleto->asistio = 1;
        $boleto->save();
        return 'boleto modificado con exito';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boleto  $boleto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boleto $boleto)
    {
        //
    }
}
