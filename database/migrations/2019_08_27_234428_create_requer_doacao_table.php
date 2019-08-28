<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequerDoacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requer_doacao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_hospital');
            $table->string('tipo_sangue');
            $table->longText('descricao');
            $table->string('hora_doacao');
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
        Schema::dropIfExists('requer_doacao');
    }
}
