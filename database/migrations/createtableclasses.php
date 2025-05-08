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
        Schema::create('classes', function (Blueprint $table) {
            $table->id('professor_titular_id');
            $table->string('name');
            $table->int('ano letivo');
            $table->rememberToken();
            $table->timestamps();
        });
    }
};