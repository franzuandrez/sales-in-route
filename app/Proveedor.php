<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table  = 'proveedor';
    protected $primaryKey = "id_proveedor";
    protected  $fillable = [
        'name',
        'description',
        'created_by',

    ];
    public $timestamps = true;

}
