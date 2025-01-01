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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->longText('contenu');
            $table->foreignId('parent_id')->nullable()->constrained('commentaires')->onUpdate('restrict')->onDelete('cascade');
            $table->foreignId('personne_id')->constrained('users')->onUpdate('restrict')->onDelete('cascade');
            $table->foreignId('article_id')->constrained('articles')->onUpdate('restrict')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
