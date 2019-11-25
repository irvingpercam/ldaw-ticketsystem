<?php

namespace App\Http\Controllers;
use App\Evento;
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
        return view('events.create');
    }
    public function store(){
        $fields = request()->validate([
            'nombre_evento' => 'required',
            'fecha_evento' => 'required',
            'direccion' => 'required',
            'descripcion' => 'required|min:3',
            'capacidad' => 'required',
            'siglas' => 'required',
        ]);
        Evento::create($fields);
        return redirect()->route('events.index');
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