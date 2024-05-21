<?php

use App\Models\Category;
use App\Models\PostDetail;
use App\Models\User;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('fichier_image')->nullable();
            $table->string('fichier_audio')->nullable();
            $table->string('fichier_link')->nullable();
            $table->string('type_article');
            $table->unsignedBigInteger('detail_id');
            
            $table->boolean('mettre_avant')->default(0);
            $table->foreign('detail_id')->references('id')->on('details');
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(User::class);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
