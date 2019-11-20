<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = [
            ['title' => 'Evento #1'],
            ['title' => 'Evento #2'],
            ['title' => 'Evento #3'],
            ['title' => 'Evento #4'],
        ];
        return view('events', compact('events'));
    }
}