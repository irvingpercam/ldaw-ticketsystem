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
        return View::make('test')
            ->with('institucion', $institucion);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Instanciamos la clase Institucion
        $institucion = new Institucion;
        //Declaramos el nombre con el nombre enviado en el request
        $institucion->nombre_institucion = $request->nombre_institucion;
        //Guardamos el cambio en nuestro modelo
        $institucion->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Solicitamos la institucion con el id solicitado por GET.
        return Institucion::where('id_institucion', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $institucion = Institucion::where('id_institucion', $request->id)->get();

        $institucion->nombre_institucion = $request->nombre_institucion;

        $institucion->save();

        return $institucion;
        //Esta función actualizará la tarea que hayamos seleccionado
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institucion $institucion)
    {
        //
    }
}
