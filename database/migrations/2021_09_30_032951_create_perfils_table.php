<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('profesion');
            $table->string('imagen');
            $table->string('edad');
            $table->string('cargo');
            $table->string('descripcion');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('añosemillero');
            $table->integer('ponencias');
            $table->integer('proyectos');
            $table->integer('semestre');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfils');
    }
}
