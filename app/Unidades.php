<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    protected $table  = 'unidades';
    protected  $primaryKey = 'id_unidad';
    protected  $fillable = [
        'descripcion',
        'created_by',

    ];
    public $timestamps = true;

}
