<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre');
            $table->integer('edad');
            $table->integer('telefono');
            $table->text('razon');
            $table->string('email');
            $table->enum('departamento',  ['Cuidado Dental','Cirugia','Neurologia']);
            $table->date('fecha');
            $table->enum('doctor',['Alvin Yakitori','Jefferson Gutierritos']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
