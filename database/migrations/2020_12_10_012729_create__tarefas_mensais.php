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
            $table->unsignedBigInteger('user_id');
            $table->string('justificativa')->nullable();
            $table ->date('data');
            $table->boolean('luminarias')->nullable();
            $table->boolean('estofados')->nullable();
            $table->boolean('placas')->nullable();
            $table->boolean('pisos')->nullable();
            $table->boolean('superficies')->nullable();
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
        Schema::dropIfExists('_tarefas_mensais');
    }
}
