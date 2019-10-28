<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHasRoles extends Model
{
    protected $table  = 'user_has_roles';

    protected  $fillable = [
        'id_rol',
        'id_user',

    ];
    public $timestamps = false;

}
