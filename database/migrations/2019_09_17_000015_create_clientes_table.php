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
            $table->increments('id_cliente');
            $table->string('nit', 15)->nullable()->default(null);
            $table->string('razon_social', 45)->nullable()->default(null);
            $table->string('nombre_comercial', 45)->nullable()->default(null);
            $table->integer('id_tipo_cliente')->nullable()->default(null);
            $table->string('direccion', 45)->nullable()->default(null);
            $table->float('longitud')->nullable()->default(null);
            $table->float('latitud')->nullable()->default(null);
            $table->integer('id_municipio')->nullable()->default(null);
            $table->integer('id_departamento')->nullable()->default(null);
            $table->integer('id_pais')->nullable()->default(null);
            $table->integer('created_by')->nullable()->default(null);
            $table->nullableTimestamps();
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
