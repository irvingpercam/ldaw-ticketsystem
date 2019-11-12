<?php

namespace App\Http\Controllers;

use App\Institucion;
use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the institucion
        $institucion = Institucion::all();

        // load the view and pass the institucion
        return $institucion;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //comprobamos que esten todos los datos del formulario
        if (!$request->nombre_institucion)
        {
            return response()->json(['errors'=>array(['code'=>422,'message'=>'Favor de llenar los campos requeridos'])],422);
        }
        //Creamos el nuevo objeto con base en el request
        $institucion = Institucion::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institucion = Institucion::find($id);
        if (!$institucion)
		{
			// Se devuelve un array errors con los errores encontrados y cabecera HTTP 404.
			// En code podríamos indicar un código de error personalizado de nuestra aplicación si lo deseamos.
			return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra este elemento'])],404);
		}
        //Solicitamos la institucion con el id solicitado por GET.
        return response()->json(['status'=>'ok','data'=>$institucion],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $institucion = Institucion::find($id);

        if (!$institucion)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'El elemento no existe.'])],404);
        }

        //llenado por el metodo patch
        $flag = false;

        if ($request->nombre_institucion)
        {
            $institucion->nombre_institucion = $request->nombre_institucion;
            $flag = true;
        }

        if ($flag){ $institucion->save(); }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institucion = Institucion::find($id);

        if (!$institucion)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'El elemento no existe.'])],404);
        }
        
        $institucion->delete();
    }
}
