<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefasMensais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_tarefas_mensais', function (Blueprint $table) {
            $table->id();
            $table->string('justificativa')->nullable();
            $table ->date('data');
            $table->boolean('luminarias')->nullable()->default(0);
            $table->boolean('estofados')->nullable()->default(0);
            $table->boolean('placas')->nullable()->default(0);
            $table->boolean('pisos')->nullable()->default(0);
            $table->boolean('superficies')->nullable()->default(0);
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
        Schema::dropIfExists('_tarefas_mensais');
    }
}
