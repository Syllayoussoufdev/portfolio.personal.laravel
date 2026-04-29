<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Competence; // Assurez-vous d'importer les modèles nécessaires

class CompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Competence::factory()->count(5)->create(); // Crée 5 compétences aléatoires

        Competence::factory()->count(5)->create([
            'user_id' => 1, // Associe ces compétences à l'utilisateur avec ID 1
            'category' => 'Language',
            'description' => 'Compétence de type language',
            'icon' => 'fa-solid fa-code',            
        ]); // Ajout de 20 compétences de catégorie "language"
        Competence::factory()->count(5)->create([
            'user_id' => 1, // Associe ces compétences à l'utilisateur avec ID 1
            'category' => 'Professionnelle',
            'description' => 'Compétence de type professionnel',
            'icon' => 'fa-solid fa-briefcase',            
        ]); // Ajout de 20 compétences de catégorie "professional"

    }
}
