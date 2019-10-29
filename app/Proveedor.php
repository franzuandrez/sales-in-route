<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table  = 'proveedores';
    protected $primaryKey = "id_proveedor";
    protected  $fillable = [
        'name',
        'description',
        'created_by',

    ];
    public $timestamps = false;

}
