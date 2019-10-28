<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHasRolesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user_has_roles';

    /**
     * Run the migrations.
     * @table user_has_roles
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_user');
            $table->integer('id_rol');

            $table->index(["id_rol"], 'fk_id_rol_idx');

            $table->index(["id_user"], 'fk_id_user_idx');


            $table->foreign('id_user', 'fk_id_user_idx')
                ->references('id_user')->on('users');

            $table->foreign('id_rol', 'fk_id_rol_idx')
                ->references('id')->on('roles');
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
