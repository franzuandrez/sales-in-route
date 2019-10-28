<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaHasUser extends Model
{
    protected $table  = 'empresa_has_user';

    protected  $fillable = [
        'id_empresa',
        'id_user',
    ];
    public $timestamps = false;
}
