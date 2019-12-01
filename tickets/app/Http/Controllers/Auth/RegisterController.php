<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Cliente;
use App\Usuario;
use App\RolUsuario;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration data.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre_cliente' => ['required', 'string', 'max:255'],
            '' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\RolUsuario
     */
    protected function create(array $data)
    {
        if (!$data->correo || !$data->contrasena || !$data->nombre_cliente)
        {
            return response()->json(['errors'=>array(['code'=>422,'message'=>'Favor de llenar los campos requeridos'])],422);
        }
        //Instanciamos la clase Usuario
        $usuario = new Usuario;
        //Declaramos el nombre con el nombre enviado en el data
        $usuario->correo= $data->correo;
        $usuario->contrasena= Hash::make($data->contrasena);
        //Guardamos el cambio en nuestro modelo
        $usuario->save();
        $cliente = new Cliente;
        $cliente->id_usuario = $usuario->id_usuario;
        $cliente->nombre_cliente = $data->nombre_cliente;
        $cliente->fecha_nacimiento = $data->fecha_nacimiento;
        $cliente->id_estado = $data->id_estado;
        $cliente->id_institucion = $data->id_institucion;
        $cliente->save();
        $rol_usuario = new RolUsuario;
        //Declaramos el nombre con el nombre enviado en el data
        $rol_usuario->id_rol= 2;
        $rol_usuario->id_usuario = $usuario->id_usuario;
        //Guardamos el cambio en nuestro modelo
        $rol_usuario->save();
    }
}
