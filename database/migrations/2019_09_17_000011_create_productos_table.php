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
            $table->increments('id_producto');
            $table->string('descripcion', 45)->nullable()->default(null);
            $table->string('color', 25)->nullable()->default(null);
            $table->integer('id_presentacion')->nullable()->default(null);
            $table->integer('id_marca')->nullable()->default(null);
            $table->integer('id_unidad')->nullable()->default(null);
            $table->integer('created_by')->nullable()->default(null);
            $table->integer('id_empresa')->nullable()->default(null);
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
