<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefasQuinzenais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_tarefas_quinzenais', function (Blueprint $table) {
            $table->id();
            $table->string('justificativa')->nullable();
            $table->date('data');
            $table->boolean('combate_a_dengue')->nullable();
            $table->boolean('limpeza_dos_vidros')->nullable();
            $table->boolean('conservar_persianas')->nullable();
            $table->boolean('lavar_as_escadas')->nullable();
            $table->boolean('revisao')->nullable();
            $table->boolean('capachos')->nullable();
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
        Schema::dropIfExists('_tarefas_quinzenais');
    }
}
