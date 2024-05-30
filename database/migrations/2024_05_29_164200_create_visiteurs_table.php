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
        Schema::create('visiteurs', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address'); // Adresse IP comme clé primaire
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')->on('posts')->onDelete('cascade');
            $table->enum('event_type', ['view', 'read']);
            $table->unsignedInteger('total_time_spent')->default(0);
            $table->timestamp('timestamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visiteurs');
    }
};
