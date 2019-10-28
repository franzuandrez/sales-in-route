<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'empresa';

    /**
     * Run the migrations.
     * @table empresa
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_empresa')->primary();
            $table->integer('id_pais')->nullable();
            $table->string('descripcion', 45)->nullable();
            $table->text('direccion_planta')->nullable();

            $table->index(["id_pais"], 'fk_id_pais_idx');


            $table->foreign('id_pais', 'fk_id_pais_idx')
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
