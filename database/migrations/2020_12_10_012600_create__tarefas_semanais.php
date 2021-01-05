<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefasSemanais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_tarefas_semanais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('justificativa')->nullable();
            $table->date('data');
            $table->boolean('lavar')->nullable();
            $table->boolean('limpar_poeira')->nullable();
            $table->boolean('jardinagem')->nullable();
            $table->boolean('limpar_tapetes')->nullable();
            $table->boolean('moveis')->nullable();
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
        Schema::dropIfExists('_tarefas_semanais');
    }
}
