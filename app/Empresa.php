<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pais;

class Empresa extends Model
{
    protected $table  = 'empresa';
    protected $primaryKey = "id_empresa";
    protected  $fillable = [
        'id_pais',
        'descripcion',
        'direccion_planta',
    ];
    public $timestamps = false;

    public function pais(){
        return $this->belongsTo('App\Pais','id_pais','id_pais');
    }
}
