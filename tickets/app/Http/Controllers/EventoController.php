<?php

namespace App\Http\Controllers;
use App\Evento;
use App\Boleto;
use Illuminate\Http\Request;
use App\Http\Requests\SaveEventRequest;
use App\Http\Requests\SaveAsistanceRequest;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.index', [
            'events' => Evento::latest('fecha_evento')->paginate()
        ]);
    }
    public function show(Evento $event){
        return view('events.show', [
            'event' => $event
        ]);
    }
    public function create(){
        return view('events.create', [
            'event' => new Evento
        ]);
    }
    public function store(SaveEventRequest $request){
        Evento::create($request->validated());
        return redirect()->route('events.index')->with('status', '¡El proyecto fue creado con éxito!');
    }
    public function edit(Evento $event){
        return view('events.edit', [
            'event' => $event
        ]);
    }
    public function update(Evento $event, SaveEventRequest $request){
        $event->update($request->validated());
        return redirect()->route('events.show', $event)->with('status', '¡El proyecto fue actualizado con éxito!');
    }
    public function destroy(Evento $event){
        $event->delete();
        return redirect()->route('events.index')->with('status', '¡El proyecto fue eliminado con éxito!');
    }
    public function asistance(Evento $event){
        return view('events.asistance', [
            'event' => $event
        ]);
    }
    public function takeAsistance(Evento $event, SaveAsistanceRequest $request){
        $boleto = Boleto::find($request->validated());
        if (!$boleto)
        {
            return redirect()->route('events.show', $event)->with('status', '¡El boleto no existe!');
        }
        if ($boleto[0]->asistio == 1) {
            return redirect()->route('events.show', $event)->with('status', '¡Este boleto ya fue registrado previamente!');
        }
        $boleto[0]->asistio = 1;
        $boleto[0]->save();
        return redirect()->route('events.show', $event)->with('status', '¡Asistencia con éxito!');
    }
    // public function store(){
    //     Evento::create([
    //         'nombre_evento' => request('nombre_evento'),
    //         'fecha_evento' => request('fecha_evento'),
    //         'direccion' => request('direccion'),
    //         'descripcion' => request('descripcion'),
    //         'capacidad' => request('capacidad'),
    //         'siglas' => request('siglas'),
    //     ]);
    //     return redirect()->route('events.index');
    // }
}