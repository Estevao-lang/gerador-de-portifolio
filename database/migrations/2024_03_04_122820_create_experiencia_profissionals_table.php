<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienciaProfissionalsTable extends Migration
{
    public function up()
    {
        Schema::create('experiencia_profissionals', function (Blueprint $table) {
            $table->id();
            $table->string('cargo');
            $table->string('empresa');
            $table->text('descricao');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('experiencia_profissionals');
    }
}
