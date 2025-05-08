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
        Schema::create('documents', function (Blueprint $table) {
            $table->id('aluno_id');
            $table->string('tipo');
            $table->string('caminho_arquivo');
            $table->string('data_upload');
            $table->rememberToken();
            $table->timestamps();
        });
    }
};