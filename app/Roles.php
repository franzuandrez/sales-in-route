<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{

    protected $table  = 'roles';
    protected $primaryKey = "id";
    protected  $fillable = [
        'name',
        'descripcion',
        'created_by',
    ];
    public $timestamps = true;

}
