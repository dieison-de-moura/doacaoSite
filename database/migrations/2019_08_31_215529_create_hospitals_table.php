<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('complento');
            $table->longText('horario_atendimento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *php artisan migrate:refresh
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
}
