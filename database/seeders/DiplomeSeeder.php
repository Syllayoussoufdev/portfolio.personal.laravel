<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\Models\Diplome; // Assurez-vous d'importer les modèles nécessaires

class DiplomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diplome::factory()->count(5)->create(); // Crée 5 diplômes aléatoires
        Diplome::factory()->count(5)->create([
            'user_id' => 1, // Associe ces diplômes à l'utilisateur avec ID 1
            'type_diplome' => 'Certificat',
            'niveau_diplome' => 'Autre',
            'domaine_etude' => 'Informatique',
        ]); // Ajout de 5 diplômes de type "Certificat" dans le domaine de l'informatique
    }
}
