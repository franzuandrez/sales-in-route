<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentaciones extends Model
{
    protected $table  = 'presentaciones';
    protected $primaryKey = "id_presentacion";
    protected  $fillable = [
        'descripcion',
        'created_by',
    ];
    public $timestamps = true;
}
