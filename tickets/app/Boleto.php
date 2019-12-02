<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleto extends Model
{
    //definimos el nombre de la tabla
    protected $table = 'boleto';
    //quitamos los timestamps de laravel para que no haya incongruencias con la bd
    public $timestamps = false;
    //definimos la llave primaria
    protected $primaryKey = 'codigo';
    //campos que son llenados a traves de un formulario
    protected $fillable = ['asistio', 'id_evento', 'id_usuario'];
}
