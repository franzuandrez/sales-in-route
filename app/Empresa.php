<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table  = 'empresa';
    protected $primaryKey = "id_empresa";
    protected  $fillable = [
        'id_pais',
        'descripcion',
        'direccion_planta',
    ];
    public $timestamps = false;
}
