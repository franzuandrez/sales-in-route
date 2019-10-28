<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentacionesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'presentaciones';

    /**
     * Run the migrations.
     * @table presentaciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_presentacion')->autoIncrement();
            $table->string('descripcion', 50)->nullable();
            $table->integer('created_by')->nullable();

            $table->index(["created_by"], 'fk_id_user_idx');
            $table->nullableTimestamps();


            $table->foreign('created_by', 'fk_presentaciones_id_user_idx')
                ->references('id_user')->on('users');
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
