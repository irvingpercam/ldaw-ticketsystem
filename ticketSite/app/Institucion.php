<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    //definimos el nombre de la tabla
    protected $table = 'institucion';
    //quitamos los timestamps de laravel para que no haya incongruencias con la bd
    public $timestamps = false;
    //definimos la llave primaria
    protected $primaryKey = 'id_institucion';
    //campos que son llenados a traves de un formulario
    protected $fillable = ['nombre_institucion'];
}
