<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //definimos el nombre de la tabla
    protected $table = 'evento';
    //quitamos los timestamps de laravel para que no haya incongruencias con la bd
    public $timestamps = false;
    //definimos la llave primaria
    protected $primaryKey = 'id_evento';
    //campos que son llenados a traves de un formulario
    protected $fillable = ['fecha_evento', 'capacidad', 'direccion', 'descripcion', 'siglas', 'nombre_evento'];
    public function getRouteKeyName(){
        return 'id_evento';
    }
}
