<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table  = 'productos';
    protected $primaryKey = "id_producto";
    protected  $fillable = [
        'descripcion',
        'color',
        'id_presentacion',
        'id_marca',
        'id_unidad',
        'created_by',
        'id_empresa',
    ];
    public $timestamps = true;


    public function presentacion(){
        return $this->belongsTo('App\Presentaciones','id_presentacion','id_presentacion');
    }
    public function marca(){
        return $this->belongsTo('App\Marca','id_marca','id_marca');
    }
    public function unidad(){
        return $this->belongsTo('App\Unidades','id_unidad','id_unidad');
    }
}
