<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // ÉTAPE A : On harmonise les données existantes
        // On force toutes les valeurs inconnues vers une valeur par défaut valide
        DB::table('projets')
            ->whereNotIn('statut', ['en cours', 'termine', 'en production', 'publie'])
            ->orWhereNull('statut') 
            ->update(['statut' => 'en cours']); // 'en cours' doit être dans votre ENUM

        Schema::table('projets', function (Blueprint $table) {
                
            // On s'assure que la colonne accepte le changement
            $table->enum('statut', ['en cours', 'termine', 'en production', 'publie'])
                ->nullable()
                ->change();
                
            $table->enum('category', ['web', 'mobile', 'ia', 'data', 'formation'])
                ->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projets', function (Blueprint $table) {
            //
        });
    }
};
