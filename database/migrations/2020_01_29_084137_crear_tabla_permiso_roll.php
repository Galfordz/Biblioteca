<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPermisoRoll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_roll', function (Blueprint $table) {
            $table->unsignedInteger('roll_id');
            $table->foreign('roll_id', 'fk_permisoroll_roll')->references('id')->on('roll')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('permiso_id');
            $table->foreign('permiso_id', 'fk_permisoroll_permiso')->references('id')->on('permiso')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permiso_roll');
    }
}
