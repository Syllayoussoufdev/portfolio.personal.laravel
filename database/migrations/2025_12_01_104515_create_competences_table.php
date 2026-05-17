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
        Schema::create('competences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Ajout de la relation avec les utilisateurs    
            $table->string('nom_competence');
            $table->string('niveau');
            $table->integer('pourcentage');
            $table->enum('category', ['Professionnelle', 'Language', 'Informatiques', 'Soft Skills']);
            $table->enum('type', ['Back-end', 'Front-end', 'Full-stack', 'Mobile', 'Autre'])->default('Autre')->nullable();
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competences');
    }
};
