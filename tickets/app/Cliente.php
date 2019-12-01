<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //definimos el nombre de la tabla
    protected $table = 'cliente';
    //quitamos los timestamps de laravel para que no haya incongruencias con la bd
    public $timestamps = false;
    //definimos la llave primaria
    protected $primaryKey = 'id_usuario';
    //campos que son llenados a traves de un formulario
    protected $fillable = ['fecha_nacimiento', 'nombre_cliente', 'id_estado', 'id_institucion'];
}
