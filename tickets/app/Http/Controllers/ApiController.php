<?php

namespace App\Http\Controllers;

use App\Boleto;
use App\Evento;
use App\User;
use App\Cliente;
use App\RolUsuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    //Controller for the events API
    
    //Use case: crear administrador
    public function createAdmin(Request $request)
    {
        if (!$request->email || !$request->password)
        {
            return response()->json(['errors'=>array(['code'=>422,'message'=>'Favor de llenar los campos requeridos'])],422);
        }
        //Instanciamos la clase usuario
        $usuario = new User;
        //Declaramos el nombre con el nombre enviado en el request
        $usuario->email= $request->email;
        $usuario->password= Hash::make($request->password);
        //Guardamos el cambio en nuestro modelo
        $usuario->save();

        $rol_usuario = new RolUsuario;
        //Declaramos el nombre con el nombre enviado en el request
        $rol_usuario->rol_id= 1;
        $rol_usuario->user_id = $usuario->id;
        //Guardamos el cambio en nuestro modelo
        $rol_usuario->save();
        return response()->json(['status'=>'ok','data'=>$usuario],200);
    }

    //Use case: crear cliente
    public function createClient(Request $request)
    {
        if (!$request->email || !$request->password || !$request->nombre_cliente)
        {
            return response()->json(['errors'=>array(['code'=>422,'message'=>'Favor de llenar los campos requeridos'])],422);
        }
        //Instanciamos la clase usuario
        $usuario = new User;
        //Declaramos el nombre con el nombre enviado en el request
        $usuario->email= $request->email;
        $usuario->password= Hash::make($request->password);
        //Guardamos el cambio en nuestro modelo
        $usuario->save();

        $cliente = new Cliente;
        $cliente->id_usuario = $usuario->id;
        $cliente->nombre_cliente = $request->nombre_cliente;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->id_estado = $request->id_estado;
        $cliente->id_institucion = $request->id_institucion;
        $cliente->save();

        $rol_usuario = new RolUsuario;
        //Declaramos el nombre con el nombre enviado en el request
        $rol_usuario->rol_id= 2;
        $rol_usuario->user_id = $usuario->id;
        //Guardamos el cambio en nuestro modelo
        $rol_usuario->save();
        return response()->json(['status'=>'ok','data'=>[$cliente,$usuario]],200);
    }

    //Use case: crear evento
    public function createEvent(Request $request)
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
        $evento->img = $request->img;
        $evento->save();
        return response()->json(['status'=>'ok','data'=>$evento],200);
    }

    //Use case: modificar evento
    public function modifyEvent(Request $request, $id)
    {
        $evento = Evento::find($id);

        if (!$evento)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'El elemento no existe.'])],404);
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
        if ($request->img)
        {
            $evento->img = $request->img;
            $flag = true;
        }

        if ($flag){ 
            $evento->save(); 
            return response()->json(['status'=>'ok','data'=>$evento],200);
        }
    }

    //Use case: eliminar evento
    public function deleteEvent($id)
    {
        $evento = Evento::find($id);

        if (!$evento)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'El elemento no existe.'])],404);
        }
        
        $tmp = $evento;
        $evento->delete();
        return response()->json(['status'=>'ok','data'=>$tmp],200);
    }

    //Use case: consultar eventos actuales
    public function showCurrentEvents()
    {
        $hoy = Carbon::now();
        $hoy->format("Y-M-D");
        $actuales = Evento::where('fecha_evento', '>=', $hoy)->get();
        return $actuales;
    }

    //Use case: consultar todos los eventos
    public function showAllEvents()
    {
        // get all the evento
        $evento = Evento::all();

        // load the view and pass the evento
        return $evento;
    }
    
    //Use case: consultar un evento
    public function showOneEvent($id)
    {
        // get one event
        $evento = Evento::find($id);

        // load the view and pass the evento
        return $evento;
    }

    //Use case: comprar boleto
    public function buyTicket($id_usuario, $id_evento)
    {
        $usuario = User::find($id_usuario);
        $evento = Evento::find($id_evento);
        $boleto = new Boleto;
        $boleto->id_usuario = $id_usuario;
        $boleto->id_evento = $id_evento;
        $boleto->save();
        return response()->json(['status'=>'ok','data'=>[$usuario, $evento, $boleto]],200);
    }

    //Use case: registrar asistente
    /* public function registerAssistant($id)
    {
        $boleto = Boleto::find($id);

        if (!$boleto)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'El elemento no existe.'])],404);
        }

        if ($boleto->asistio == 1) {
            return response()->json(['status'=>'ok','data'=>["este boleto ya fue utilizado"]],400);
        }

        $boleto->asistio = 1;
        $boleto->save();
        return response()->json(['status'=>'ok','data'=>[$boleto, " asistencia registrada"]],200);
    } */

    public function registerAssistant(Request $request)
    {
        $boleto = Boleto::find($request->codigo);

        if (!$boleto)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'El elemento no existe.'])],404);
        }

        if ($boleto->asistio == 1) {
            return response()->json(['status'=>'ok','data'=>["este boleto ya fue utilizado"]],400);
        }

        $boleto->asistio = 1;
        $boleto->save();
        return response()->json(['status'=>'ok','data'=>[$boleto, " asistencia registrada"]],200);
    }
}
