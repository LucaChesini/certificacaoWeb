<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sinopse');
            $table->string('ano');
            $table->string('imagem');
            $table->string('link');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('filmes');
    }
};
