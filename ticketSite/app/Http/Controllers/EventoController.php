<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Boleto;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the evento
        $evento = Evento::all();

        // load the view and pass the evento
        return $evento;
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
    public function store(Request $request)
    {
        if(!$request->fecha_evento || !$request->nombre_evento || !$request->capacidad || !$request->direccion) 
        {
            return response()->json(['errors'=>array(['code'=>422,'message'=>'Favor de llenar los campos requeridos'])],422);
        }

        $evento = new Evento;
        $evento->fecha_evento = $request->fecha_evento;
        $evento->nombre_evento = $request->nombre_evento;
        $evento->capacidad = $request->capacidad;
        $evento->direccion = $request->direccion;
        $evento->descripcion = $request->descripcion;
        $evento->siglas = $request->siglas;
        $evento->costo = $request->costo;
        $evento->save();

        for($i=0; $i<($evento->capacidad); $i++){
            $boleto = new Boleto;
            $boleto->id_evento = $evento->id_evento;
            $boleto->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);
        if (!$evento)
		{
			// Se devuelve un array errors con los errores encontrados y cabecera HTTP 404.
			// En code podríamos indicar un código de error personalizado de nuestra aplicación si lo deseamos.
			return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra este elemento'])],404);
		}
        //Solicitamos la evento con el id solicitado por GET.
        return response()->json(['status'=>'ok','data'=>$evento],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $evento = Evento::find($id);

        if (!$evento)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'El elemento no existe.'])],404);
        }
        if (($request->capacidad) < ($evento->capacidad))
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'No se puede reducir la capacidad del evento'])],404);
        }

        //llenado por el metodo patch
        $flag = false;

        if ($request->nombre_evento)
        {
            $evento->nombre_evento = $request->nombre_evento;
            $flag = true;
        }
        if ($request->fecha_evento)
        {
            $evento->fecha_evento = $request->fecha_evento;
            $flag = true;
        }
        if ($request->capacidad)
        {
            $nuevos = ($request->capacidad) - ($evento->capacidad);

            if (($request->capacidad) > ($evento->capacidad)){
                for($i=0; $i<$nuevos; $i++){
                    $boleto = new Boleto;
                    $boleto->id_evento = $evento->id_evento;
                    $boleto->save();
                }
            }

            $evento->capacidad = $request->capacidad;
            $flag = true;
        }
        if ($request->direccion)
        {
            $evento->direccion = $request->direccion;
            $flag = true;
        }
        if ($request->descripcion)
        {
            $evento->descripcion = $request->descripcion;
            $flag = true;
        }
        if ($request->siglas)
        {
            $evento->siglas = $request->siglas;
            $flag = true;
        }

        if ($flag){ 
            $evento->save(); 
            return 'elemento modificado con exito';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id);

        if (!$evento)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'El elemento no existe.'])],404);
        }
        
        $evento->delete();
        return 'evento eliminado';
    }
}
