<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesHasPermissionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'roles_has_permissions';

    /**
     * Run the migrations.
     * @table roles_has_permissions
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_rol');
            $table->integer('id_permission');

            $table->index(["id_rol"], 'fk_id_rol_idx');

            $table->index(["id_permission"], 'fk_id_permission_idx');


            $table->foreign('id_rol', 'fk_has_permision_id_rol_idx')
                ->references('id')->on('roles');

            $table->foreign('id_permission', 'fk_has_id_permission_idx')
                ->references('id')->on('permissions');
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
