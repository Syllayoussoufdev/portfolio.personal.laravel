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
        Competence::factory()->create([
            'nom_competence' => 'PHP',
            'niveau' => 'Avancé',
            'pourcentage' => 90,
            'category' => 'Informatiques',
            'description' => 'Maîtrise du langage PHP pour le développement web.',
            'user_id' => 1, // Assurez-vous que cet ID correspond à un utilisateur existant
            'description' => 'Maîtrise du langage PHP pour le développement web.',
            'icon' => 'https://cdn-icons-png.flaticon.com/512/5968/5968332.png',
            'type' => 'Back-end',
        ]);
        Competence::factory()->create([
            'nom_competence' => 'JavaScript',
            'niveau' => 'Intermédiaire',
            'pourcentage' => 75,
            'category' => 'Informatiques',
            'description' => 'Compétence en JavaScript pour le développement front-end.',
            'user_id' => 1,
            'icon' => 'https://cdn-icons-png.flaticon.com/512/5968/5968332.png',
            'type' => 'Front-end',
        ]);
        Competence::factory()->create([
            'nom_competence' => 'WordPress',
            'niveau' => 'Intermédiaire',
            'pourcentage' => 80,
            'category' => 'Informatiques',
            'description' => '2 expériences de développement avec le CMS WordPress pour la création de sites web.',
            'user_id' => 1,
            'icon' => 'https://cdn-icons-png.flaticon.com/512/5968/5968332.png',
            'type' => 'Autre',
        ]);
        Competence::factory()->create([
            'nom_competence' => 'Laravel',
            'niveau' => 'Avancé',
            'pourcentage' => 85,
            'category' => 'Informatiques',
            'description' => 'Expérience approfondie avec le framework Laravel.',
            'user_id' => 1,
            'icon' => 'https://cdn-icons-png.flaticon.com/512/5968/5968332.png',
            'type' => 'Back-end',
        ]);
        Competence::factory()->create([
            'nom_competence' => 'Git',
            'niveau' => 'Intermédiaire',
            'pourcentage' => 80,
            'category' => 'Informatiques',
            'description' => 'Compétence en gestion de version avec Git.',
            'user_id' => 1,
            'icon' => 'https://cdn-icons-png.flaticon.com/512/5968/5968332.png',
            'type' => 'Autre',
        ]);

        Competence::factory()->create([
            'nom_competence' => 'MySQL',
            'niveau' => 'Avancé',
            'pourcentage' => 90,
            'category' => 'Informatiques',
            'description' => 'Maîtrise de MySQL pour la gestion de bases de données.',
            'user_id' => 1,
            'icon' => 'https://cdn-icons-png.flaticon.com/512/5968/5968332.png',
            'type' => 'Back-end',
        ]);


        Competence::factory()->create([
            'nom_competence' => 'React',
            'niveau' => 'Intermédiaire',
            'pourcentage' => 70,
            'category' => 'Informatiques',
            'description' => 'Compétence en React pour le développement d\'interfaces utilisateur.',
            'user_id' => 1,
            'icon' => 'https://cdn-icons-png.flaticon.com/512/5968/5968332.png',
            'type' => 'Front-end',
        ]);
        Competence::factory()->create([
            'nom_competence' => 'Communication',
            'niveau' => 'Avancé',
            'pourcentage' => 95,
            'category' => 'Soft Skills',
            'description' => 'Excellentes compétences en communication écrite et orale.',
            'user_id' => 1,
            'icon' => 'null',
            'type' => 'Autre',
        ]);

        Competence::factory()->create([
            'nom_competence' => 'Gestion de projet',
            'niveau' => 'Intermédiaire',
            'pourcentage' => 80,
            'category' => 'Professionnelle',
            'description' => 'Compétence en gestion de projet avec des méthodologies agiles.',
            'user_id' => 1,
            'icon' => 'null',
            'type' => 'Autre',
        ]);

    }
}
