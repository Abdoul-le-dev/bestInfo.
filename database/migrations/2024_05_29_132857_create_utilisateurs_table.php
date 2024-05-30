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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address'); // Colonne pour stocker l'adresse IP
            $table->string('country')->nullable(); // Colonne pour stocker le pays extrait du cookie
            $table->string('cookie_value')->nullable(); // Colonne pour stocker la valeur du cookie
            $table->unsignedInteger('total_time_spent')->default(0); // Colonne pour stocker le temps total passé sur la plateforme
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
