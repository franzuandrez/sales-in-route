<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'clientes';

    /**
     * Run the migrations.
     * @table clientes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_cliente')->autoIncrement();
            $table->string('nit', 15)->nullable();
            $table->string('razon_social', 45)->nullable();
            $table->string('nombre_comercial', 45)->nullable();
            $table->integer('id_tipo_cliente')->nullable();
            $table->string('direccion', 45)->nullable();
            $table->float('longitud')->nullable();
            $table->float('latitud')->nullable();
            $table->integer('id_municipio')->nullable();
            $table->integer('id_departamento')->nullable();
            $table->integer('id_pais')->nullable();
            $table->integer('created_by')->nullable();

            $table->index(["id_pais"], 'fk_id_pais_idx');

            $table->index(["id_tipo_cliente"], 'fk_id_categoria_cliente_idx');
            $table->nullableTimestamps();


            $table->foreign('id_tipo_cliente', 'fk_id_categoria_cliente_idx')
                ->references('id_categoria_cliente')->on('categoria_clientes');

            $table->foreign('id_pais', 'fk_cliente_id_pais_idx')
                ->references('id_pais')->on('pais');
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
