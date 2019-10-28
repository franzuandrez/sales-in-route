<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'productos';

    /**
     * Run the migrations.
     * @table productos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_producto')->autoIncrement();
            $table->string('descripcion', 45)->nullable();
            $table->string('color', 25)->nullable();
            $table->integer('id_presentacion')->nullable();
            $table->integer('id_marca')->nullable();
            $table->integer('id_unidad')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('id_empresa')->nullable();

            $table->index(["id_marca"], 'fk_id_marca_idx');

            $table->index(["id_empresa"], 'fk_id_empresa_idx');

            $table->index(["id_unidad"], 'fk_id_unidad_idx');

            $table->index(["created_by"], 'fk_id_user_idx');

            $table->index(["id_presentacion"], 'fk_id_presentacion_idx');
            $table->nullableTimestamps();


            $table->foreign('id_marca', 'fk_id_marca_idx')
                ->references('id_marca')->on('marca');

            $table->foreign('id_empresa', 'fk_productos_id_empresa_idx')
                ->references('id_empresa')->on('empresa');

            $table->foreign('created_by', 'fk_productos_id_user_idx')
                ->references('id_user')->on('users');

            $table->foreign('id_presentacion', 'fk_productos_id_presentacion_idx')
                ->references('id_presentacion')->on('presentaciones');

            $table->foreign('id_unidad', 'fk_producto_id_unidad_idx')
                ->references('id_unidad')->on('unidades');
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
