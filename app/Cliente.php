<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
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
    public $timestamps = true;


    public function tipo_cliente(){

        return $this->belongsTo('App\CategoriaCliente','id_tipo_cliente','id_categoria_cliente');
    }

}
