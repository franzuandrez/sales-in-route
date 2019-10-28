<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolesHasPermission extends Model
{
    protected $table  = 'roles_has_permission';

    protected  $fillable = [
        'id_rol',
        'id_permission',

    ];
    public $timestamps = false;

}
