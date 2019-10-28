<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorHasProductosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'proveedor_has_productos';

    /**
     * Run the migrations.
     * @table proveedor_has_productos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_proveedor');
            $table->integer('id_producto');
            $table->decimal('costo_compra', 18, 2);

            $table->index(["id_producto"], 'fk_id_producto_idx');

            $table->index(["id_proveedor"], 'fk_id_proveedor_idx');


            $table->foreign('id_producto', 'fk_proveedores_has_producto_id_producto_idx')
                ->references('id_producto')->on('productos');

            $table->foreign('id_proveedor', 'fk_proveedores_has_producto_id_proveedor_idx')
                ->references('id_proveedor')->on('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
