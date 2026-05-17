<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::factory()->create([
            'user_id' => 1,// Assurez-vous que l'utilisateur avec ID 1 existe ou ajustez en conséquence
            'poste' => 'Stage développeur web - Stratos-CI',
            'entreprise' => 'Stratos-CI',
            'Adresse_entreprise' => 'Abidjan, Côte d\'Ivoire',
            'periode' => '2023-01-01 to 2023-06-30',
            'type_contrat' => 'Stage',
            'secteur_activite' => 'Informatique',
            'realisation_principale' => 'Développement d\'applications web en utilisant PHP et JavaScript.',
            'projet_principal' => 'Application de gestion de projet',
            'resultats_obtenus' => 'Acquisition de compétences en développement web et en gestion de projet.',
            'description' => 'Stage de fin d\'études dans le domaine du développement web.'
        ]);
        Experience::factory()->create([
            'user_id' => 1,
            'poste' => 'Développeur web freelance',
            'entreprise' => 'Freelance',
            'Adresse_entreprise' => 'Abidjan, Côte d\'Ivoire',
            'periode' => '2023-07-01 to Present',
            'type_contrat' => 'Freelance',
            'secteur_activite' => 'Informatique',
            'realisation_principale' => 'Développement de sites web pour des clients locaux.',
            'projet_principal' => 'Site e-commerce pour une boutique locale',
            'resultats_obtenus' => 'Satisfaction des clients et développement d\'un portefeuille de projets.',
            'description' => 'Travail en tant que développeur web indépendant pour divers clients.'
        ]);
        Experience::factory()->create([
            'user_id' => 1,
            'poste' => 'Assistant technique - MUSCOP-CI : (Temp parciel) - Deploiement et maintenance des systèmes informatiques',
            'entreprise' => 'MUSCOP-CI',
            'Adresse_entreprise' => 'Abidjan, Côte d\'Ivoire',
            'periode' => 'Mars 2025 - Mars 2026',
            'type_contrat' => 'CDD',
            'secteur_activite' => 'Assurance',
            'realisation_principale' => 'Assistance technique pour la gestion des systèmes informatiques.',
            'projet_principal' => 'Mise à jour du système de gestion des données clients',
            'resultats_obtenus' => 'Amélioration de l\'efficacité du système de gestion des données clients.',
            'description' => 'Travail à temps partiel en tant qu\'assistant technique pour une compagnie d\'assurance.'
        ]);

    
    }
}
