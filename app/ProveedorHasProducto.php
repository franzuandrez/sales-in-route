<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProveedorHasProducto extends Model
{
    protected $table  = 'proveedor_has_producto';
    protected $primaryKey = "id_marca";
    protected  $fillable = [
        'id_proveedor',
        'id_producto',
        'costo_compra',
    ];
    public $timestamps = false;
}
