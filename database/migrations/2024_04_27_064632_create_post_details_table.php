<?php

use App\Models\Post;
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
        Schema::create('post_details', function (Blueprint $table) {
            $table->id();
           
            $table->string('post_similaire_1')->nullable();
            $table->string('post_similaire_2')->nullable();
            $table->string('post_similaire_3')->nullable();

            $table->foreignIdFor(Post::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_details');
    }
};
