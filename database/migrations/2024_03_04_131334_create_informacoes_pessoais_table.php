<?php
// database/migrations/xxxx_xx_xx_create_informacoes_pessoais_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacoesPessoaisTable extends Migration
{
    public function up()
    {
        Schema::create('informacoes_pessoais', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('informacoes_pessoais');
    }
}
