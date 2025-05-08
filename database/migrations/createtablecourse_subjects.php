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
        Schema::create('course_subjects', function (Blueprint $table) {
            $table->id('curso_id');
            $table->id('disciplina_id');
            $table->string('semestre');
            $table->rememberToken();
            $table->timestamps();
        });
    }
};