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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Ajout de la relation avec les utilisateurs
            $table->string('poste');
            $table->string('entreprise');
            $table->string('Adresse_entreprise')->nullable();
            $table->string('periode'); // ex: "2019 - Present"
            $table->string('type_contrat')->nullable(); // ex: "CDI", "CDD", "Stage"
            $table->string('secteur_activite')->nullable(); // ex: "Informatique", "Finance"
            $table->string('competences_utilisees')->nullable(); // ex: "PHP, Laravel, MySQL"
            $table->string('realisation_principale')->nullable(); // ex: "Développement d'une application de gestion de projet"
            // $table->string('equipe_geree')->nullable(); // ex: "5 personnes"
            $table->string('projet_principal')->nullable(); // ex: "Migration d'une application vers le cloud"
            $table->string('resultats_obtenus')->nullable(); // ex: "Amélioration des performances de 30%"
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
