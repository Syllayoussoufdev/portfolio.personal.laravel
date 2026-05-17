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
        Schema::create('diplomes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Ajout de la relation avec les utilisateurs           
            $table->string('nom_diplome');
            $table->enum('type_diplome', ['Certificat', 'Licence', 'Master', 'Doctorat', 'Autre'])->default('Autre');
            $table->string('centre_formateur');
            $table->year('annee_obtention');
            $table->string('niveau_diplome')->nullable(); // Ex: Bac, Bac+2, Bac+3, etc.
            $table->string('domaine_etude');
            $table->string('description');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diplomes');
    }
};
