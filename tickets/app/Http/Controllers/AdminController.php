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
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SaveAdminRequest;
class AdminController extends Controller
{
    public function index()
    {
        return view('admins.index');
    }
    public function create(){
        return view('admins.create');
    }
    public function store(Request $request)
    {
        if (!$request->email || !$request->password)
        {
            return redirect()->route('admins.create')->with('status', '¡Favor de llenar todos los campos!');
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
        return redirect()->route('admins.index')->with('status', '¡Administrador creado con éxito!');
    }
    public function show(User $admin){
        return view('admins.show', [
            'admin' => $admin
        ]);
    }
    public function edit(User $admin){
        return view('admins.edit', [
            'admin' => $admin
        ]);
    }
    public function update(User $admin, SaveAdminRequest $request){
        $admin->update($request->validated());
        return redirect()->route('admins.show', $admin)->with('status', '¡El administrador fue actualizado con éxito!');
    }
    public function destroy(User $admin){
        $admin->delete();
        return redirect()->route('admins.index')->with('status', '¡El administrador fue eliminado con éxito!');
    }
}
