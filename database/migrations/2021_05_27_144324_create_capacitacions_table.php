<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapacitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacitaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')
                ->on('personas');//definimos la relacion

            $table->date('fecha');
            $table->text('nombre');
            $table->integer('horas')->default(0);
            $table->string('lugar');
            $table->string('institucion')->nullable();

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
        Schema::dropIfExists('capacitaciones');
    }
}
