<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id('turma_id');
            $table->id('disciplina_id');
            $table->id('professor_id');
            $table->date('data_hora_inicio');
            $table->date('data_hora_fim');
            $table->string('conteudo');
            $table->rememberToken();
            $table->timestamps();
        });
    }
};