<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table  = 'productos';
    protected $primaryKey = "id_producto";
    protected  $fillable = [
        'descripcion',
        'color',
        'id_presentacion',
        'id_marca',
        'id_unidad',
        'created_by',
        'id_empresa',
    ];
    public $timestamps = true;
}
