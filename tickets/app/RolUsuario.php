<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class RolUsuario extends Model
{
    //definimos el nombre de la tabla
    protected $table = 'rol_usuario';
    //quitamos los timestamps de laravel para que no haya incongruencias con la bd
    public $timestamps = false;
    //definimos la llave primaria
    protected $primaryKey = 'id';
    //campos que son llenados a traves de un formulario
    protected $fillable = ['id_rol', 'id_usuario'];
}