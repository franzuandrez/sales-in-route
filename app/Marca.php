<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table  = 'marca';
    protected $primaryKey = "id_marca";
    protected  $fillable = [
        'descripcion',
        'created_by',
    ];
    public $timestamps = true;
}
