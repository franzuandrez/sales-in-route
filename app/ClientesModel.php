<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientesModel extends Model
{
    protected $table  = 'clientes';
    protected $primaryKey = "id_cliente";
    protected  $fillable = [
        'nit',
        'razon_social',
        'nombre_comercial',
        'id_tipo_cliente',
        'direccion',
        'longitud',
        'latitud',
        'id_municipio',
        'id_departamento',
        'id_pais',
        'created_by',
    ];
}
