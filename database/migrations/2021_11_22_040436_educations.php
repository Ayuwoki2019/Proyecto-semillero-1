
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Educations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function(Blueprint $table){
            $table->id();
            $table->dateTime('year');
            $table->string('title');
            $table->enum('category',['Taller','Seminario','Curso','Diplomado','Especialización','Maestria','Pregrado']);
            $table->string('description');
            $table->foreignId('perfil_id')->references('id')->on('perfils')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eductations');
    }
}
