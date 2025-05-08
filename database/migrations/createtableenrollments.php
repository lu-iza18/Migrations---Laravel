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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id('aluno_id');
            $table->id('turma_id');
            $table->date('dat_matricula');
            $table->rememberToken();
            $table->timestamps();
        });
    }
};