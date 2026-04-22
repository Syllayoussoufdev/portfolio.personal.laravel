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
            $table->string('Nom_diplome');
            $table->enum('type_diplome', ['Certificat', 'Licence', 'Master', 'Doctorat', 'Autre'])->default('Autre');
            $table->string('Centre_formateur');
            $table->year('Annee_obtention');
            $table->string('niveau_diplome');
            $table->string('Domaine_etude');
            $table->string('Description');            
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
