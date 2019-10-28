<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaCliente extends Model
{
    protected $table  = 'categoria_clientes';
    protected $primaryKey = "id_categoria_clientes";
    protected  $fillable = [
        'descripcion',
        'created_by',
    ];
    public $timestamps = true;

}
