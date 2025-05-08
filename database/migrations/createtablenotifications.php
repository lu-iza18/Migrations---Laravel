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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('mensagem');
            $table->date('data_hora');
            $table->string('lida');
            $table->rememberToken();
            $table->timestamps();
        });
    }
};