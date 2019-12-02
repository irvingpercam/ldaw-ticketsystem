<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Cliente;
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
    protected $redirectTo = 'eventos';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'name' => ['required', 'string', 'max:50'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $usuario = new User;
        $cliente = new Cliente;

        //Declaramos el nombre con el nombre enviado en el request
        $usuario->email= $data['email'];
        $usuario->password= Hash::make($data['password']);
        //Guardamos el cambio en nuestro modelo
        $usuario->save();

        
        $cliente->nombre_cliente = $data['name'];
        $cliente->fecha_nacimiento = $data['birth'];
        $cliente->id_estado = $data['estado'];
        $cliente->id_institucion = $data['institucion'];
        $cliente->id_usuario = $usuario->id;
        $cliente->save();

        $rol_usuario = new RolUsuario;
        //Declaramos el nombre con el nombre enviado en el request
        $rol_usuario->rol_id= 2;
        $rol_usuario->user_id = $usuario->id;
        //Guardamos el cambio en nuestro modelo
        $rol_usuario->save();
        return $usuario;
       // return redirect()->route('login', $usuario)->with('status', '¡Usuario registrado exitosamente!');
    }
}
