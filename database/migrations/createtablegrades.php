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
        Schema::create('grades', function (Blueprint $table) {
            $table->id('aluno_id');
            $table->id('disciplina_id');
            $table->string('avaliacao');
            $table->int('nota');
            $table->rememberToken();
            $table->timestamps();
        });
    }
};