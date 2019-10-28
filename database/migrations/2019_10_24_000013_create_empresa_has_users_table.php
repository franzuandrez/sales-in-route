<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaHasUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'empresa_has_users';

    /**
     * Run the migrations.
     * @table empresa_has_users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_empresa');
            $table->integer('id_user');

            $table->index(["id_empresa"], 'fk_id_empresa_idx');

            $table->index(["id_user"], 'fk_id_user_idx');


            $table->foreign('id_empresa', 'fk_id_empresa_idx')
                ->references('id_empresa')->on('empresa');

            $table->foreign('id_user', 'fk_empresa_has_id_user_idx')
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
