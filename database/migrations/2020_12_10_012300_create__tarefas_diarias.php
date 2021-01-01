<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefasDiarias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_tarefas_diarias', function (Blueprint $table) {
            $table->id();
            $table-> string ( 'justificativa' );
            $table->date('data');
            $table->boolean('aspirador')->nullable()->default(0);
            $table->boolean('vasos')->nullable()->default(0);
            $table->boolean('limpar guinches')->nullable()->default(0);
            $table->boolean('lixo')->nullable()->default(0);
            $table->boolean('terminais')->nullable()->default(0);
            $table->boolean('ambiente organizado')->nullable()->default(0);
            $table->boolean('varrer')->nullable()->default(0);
            $table->boolean('lavar lixeiras')->nullable()->default(0);
            $table->boolean('lavar pias')->nullable()->default(0);
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
        Schema::dropIfExists('_tarefas_diarias');
    }
}
