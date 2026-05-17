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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Ajout de la relation avec les utilisateurs
            $table->string('titre');
            $table->string('images')->nullable(); // Chemin vers les images du projet
            $table->text('description')->nullable();
            $table->enum('statut', ['En cours', 'Terminé', 'En production', 'Publié'])->nullable();
            $table->enum('category', ['Web', 'Mobile', 'Desktop', 'automatisation', 'AI','Data','Autre'])->nullable();
            $table->string('slug')->unique();
            $table->text('Processus_creation')->nullable();
            $table->string('lien_github')->nullable();
            $table->string('lien_demo')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
