<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Diplome; // Assurez-vous d'importer les modèles nécessaires
use App\Models\Competence;
use App\Models\Experience; // Assurez-vous d'importer les modèles nécessaires
use App\Models\Projet;

class LiaisonFactorySeeder extends Seeder
{
    /**
     * Run the database seeds. 
     */
    public function run(): void
    {
        $idsDiplomes = Diplome::all()->pluck('id')->toArray(); // Récupère tous les IDs des diplômes créés sous forme de tableau
        $idsCompetences = Competence::all()->pluck('id')->toArray(); // Récupère tous les IDs des compétences créées sous forme de tableau
        $IdsExperiences = Experience::all()->pluck('id')->toArray(); // Récupère tous les IDs des expériences créées sous forme de tableau
        $IdsProjet = Projet::all()->pluck('id')->toArray(); // Récupère tous les IDs des projets créés sous forme de tableau

        Competence::all()->each(function($competence) use ($idsDiplomes) { 
            $competence->diplome()->attach(array_slice($idsDiplomes, 0, rand(1, 5))); // Lier chaque compétence à tous les diplômes avec un niveau de maîtrise aléatoire
        });

        Diplome::all()->each(function($diplome) use ($idsCompetences) {
            shuffle($idsCompetences); // Mélanger les IDs de compétences pour une sélection aléatoire
            $diplome->competence()->attach(array_slice($idsCompetences, 0, rand(1, 5))); // Attacher un nombre aléatoire de compétences (entre 1 et 5) à chaque diplôme
        });

        Experience::all()->each(function($experience) use ($idsCompetences) { 
            shuffle($idsCompetences); // Mélanger les IDs de compétences pour une sélection aléatoire
            $experience->competence()->attach(array_slice($idsCompetences, 0, rand(1, 3))); // Attacher un nombre aléatoire de compétences (entre 1 et 5) à chaque expérience
        });

        Projet::all()->each(function($projet) use ($idsCompetences) { 
            shuffle($idsCompetences); // Mélanger les IDs de compétences pour une sélection aléatoire
            $projet->competence()->attach(array_slice($idsCompetences, 0, rand(1, 4))); // Attacher un nombre aléatoire de compétences (entre 1 et 5) à chaque projet
        });


        //1. DÉSACTIVER la vérification des clés étrangèresfacultative mais recommandée pour éviter les erreurs de contraintes lors du vidage des tables
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //  Vider les tables pour un seeder propre
        // DB::table('diplomes')->truncate(); 
        // DB::table('competences')->truncate();
        // DB::table('diplome_competence')->truncate();

        // // 3. RÉACTIVER la vérification des clés étrangères
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // competence::factory()->count(5)->create([
        //     'category' => 'language',
        //     'description' => 'Compétence de type language',
        //     'icon' => 'fa-solid fa-code',            
        // ])->each(function($competence use ($idsDiplomes)) { 
        //     $competence->diplome()->attach($idsDiplomes, ['niveau_maitrise' => rand(1, 5)]); // Lier chaque compétence à tous les diplômes avec un niveau de maîtrise aléatoire
        // });// Ajout de 20 compétences de catégorie "language"
        // competence::factory()->count(5)->create([
        //     'category' => 'professional',
        //     'description' => 'Compétence de type professionnel',
        //     'icon' => 'fa-solid fa-briefcase',            
        // ])->each(function($competence use ($idsDiplomes)) { 
        //     $competence->diplome()->attach($idsDiplomes, ['niveau_maitrise' => rand(1, 5)]); // Lier chaque compétence à tous les diplômes avec un niveau de maîtrise aléatoire
        // });    
        // // Ajout de 20 compétences de catégorie "professional"

        // // 2. Récupérer tous les IDs de Compétences (pour la liaison)
        // // La méthode pluck('id') est très efficace pour récupérer une seule colonne
        // $idsCompetences = competence::all()->pluck('id')->toArray();// Récupère tous les IDs des compétences quon vient de creer sous forme de tableau
        
        // // 3. Créer 10 Diplômes et les lier aux Compétences avec un niveau de maîtrise aléatoire
        // //each permet de parcourir chaque diplôme créé et use pour la liaison des variables externes

        // Diplome::factory()->count(5)->create()->each(function($diplome) use ($idsCompetences) {
        //     // Mélanger les IDs de compétences pour une sélection aléatoire
        //     shuffle($idsCompetences);
        //     // Attacher un nombre aléatoire de compétences (entre 1 et 5) à chaque diplôme
        //     $diplome->competence()->attach(array_slice($idsCompetences, 0, rand(1, 5)),);
        // });
        // $idsDiplomes = Diplome::all()->pluck('id')->toArray(); // Récupère tous les IDs des diplômes créés sous forme de tableau

    }
}
