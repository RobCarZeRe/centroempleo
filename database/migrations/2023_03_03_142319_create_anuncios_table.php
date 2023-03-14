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
        Schema::create('anuncios', function (Blueprint $table) {
            
            $table->id();
            $table->string('empresa');
            $table->string('email_emp')->nullable();

            $table->string('texto_anuncio')->nullable();
            $table->string('remuneracion')->nullable();
            $table->string('inicio')->nullable();
            $table->string('fin')->nullable();
            $table->string('link')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anuncios');
    }
};
