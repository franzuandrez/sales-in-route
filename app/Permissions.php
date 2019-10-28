<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $table  = 'permissions';
    protected $primaryKey = "id";
    protected  $fillable = [
        'name',
        'isMenu',
        'id_Menu',
        'order',
        'display_name',
        'icon',

    ];
    public $timestamps = true;
}
