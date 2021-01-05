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
            $table->unsignedBigInteger('user_id');
            $table-> string ( 'justificativa')->nullable();
            $table->date('data');
            $table->boolean('aspirador')->nullable()->default(0);
            $table->boolean('vasos')->nullable()->default(0);
            $table->boolean('limpar_guinches')->nullable()->default(0);
            $table->boolean('lixo')->nullable()->default(0);
            $table->boolean('terminais')->nullable()->default(0);
            $table->boolean('ambiente_organizado')->nullable()->default(0);
            $table->boolean('varrer')->nullable()->default(0);
            $table->boolean('lavar_lixeiras')->nullable()->default(0);
            $table->boolean('lavar_pias')->nullable()->default(0);
            $table->timestamps();
            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
