<?php

namespace App\Http\Controllers;

use App\Institucion;
use Illuminate\Http\Request;
use App\Http\Requests\SaveInstitucionRequest;
class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('institutions.index', [
            'institutions' => Institucion::all()
        ]);
    }
    public function create(){
        return view('institutions.create', [
            'institution' => new Institucion
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveInstitucionRequest $request)
    {
        Institucion::create($request->validated());
        return redirect()->route('institutions.index')->with('status', '¡La institucion fue registrada con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function show(Institucion $institution){
        return view('institutions.show', [
            'institution' => $institution
        ]);
    }
    public function edit(Institucion $institution){
        return view('institutions.edit', [
            'institution' => $institution
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Institucion $institution, SaveInstitucionRequest $request){
        $institution->update($request->validated());
        return redirect()->route('institutions.show', $institution)->with('status', '¡La institucion fue actualizada con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institucion $institution){
        $institution->delete();
        return redirect()->route('institutions.index')->with('status', '¡La institucion fue eliminada con éxito!');
    }
}