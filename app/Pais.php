<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table  = 'pais';
    protected $primaryKey = "id_pais";
    protected  $fillable = [
        'descripcion',
        'codigo_postal',
        'isActive',
    ];
    public $timestamps = false;
}
