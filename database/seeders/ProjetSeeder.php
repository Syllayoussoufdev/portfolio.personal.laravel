<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Projet;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Projet::factory()->create([
            'user_id' => 1, // Associe ces projets à l'utilisateur avec ID 1 (Sylla Youssouf)
            'titre' => 'Porfolio CV - Personnel',
            'description' => 'Développement d\'un portfolio en ligne pour présenter les compétences, les expériences, et les projets d\'un individu, avec une interface moderne et responsive.',
            'Processus_creation' => 'Développement d\'un portfolio en ligne pour présenter les compétences, les expériences, et les projets d\'un individu, avec une interface moderne et responsive.',
            'slug' => 'portfolio-cv-personnel',
            'statut' => 'Publié',
            'category' => 'Web',
            'images' => 'storage/projets/portfolio2.png', // Vous pouvez ajouter des chemins d'images fictifs ici si nécessaire
            'lien_github' => 'https://github.com/sylla-youssouf/portfolio-cv',
            'lien_demo' => 'https://syllayoussouf.com', // Remplacez par le lien de démonstration réel si disponible
        ]);


        Projet::factory()->create([
            'user_id' => 1, // Associe ces projets à l'utilisateur avec ID 1 (Sylla Youssouf)
            'titre' => 'Système de gestion des recrutements',
            'description' => 'Développement d\'une application web pour gérer les processus de recrutement, incluant la publication d\'offres d\'emploi, la gestion des candidatures, et la communication avec les candidats.',
            'Processus_creation' => 'Développement d\'une application web pour gérer les processus de recrutement, incluant la publication d\'offres d\'emploi, la gestion des candidatures, et la communication avec les candidats.',
            'slug' => 'systeme-gestion-recrutements',
            'statut' => 'Terminé',
            'category' => 'Web',
            'images' => '', // Vous pouvez ajouter des chemins d'images fictifs ici si nécessaire
            'lien_github' => 'https://github.com/sylla-youssouf/recrutement-app',
            'lien_demo' => 'https://demo-recrutement-app.com'
        ]);
        Projet::factory()->create([
            'user_id' => 1, // Associe ces projets à l'utilisateur avec ID 1 (Sylla Youssouf)
            'titre' => 'Application de gestion de tâches',
            'description' => 'Création d\'une application mobile pour aider les utilisateurs à organiser leurs tâches quotidiennes, avec des fonctionnalités de rappel, de catégorisation, et de partage.',
            'Processus_creation' => 'Création d\'une application mobile pour aider les utilisateurs à organiser leurs tâches quotidiennes, avec des fonctionnalités de rappel, de catégorisation, et de partage.',
            'slug' => 'application-gestion-taches',
            'statut' => 'Terminé',
            'category' => 'Web',
            'images' => 'storage/projets/gestiontache.png',
            'lien_github' => '#',
            'lien_demo' => '#',
        ]);
        Projet::factory()->create([
            'user_id' => 1, // Associe ces projets à l'utilisateur avec ID 1 (Sylla Youssouf)
            'titre' => 'Site de Freelance - Personnel',
            'description' => 'Développement d\'un site web pour les freelances afin de promouvoir leurs services et de faciliter les échanges avec les clients.',
            'Processus_creation' => 'Développement d\'un site web pour les freelances afin de promouvoir leurs services et de faciliter les échanges avec les clients.',
            'slug' => 'site-freelance-personnel',
            'statut' => 'En cours',
            'category' => 'Web',
            'images' => 'storage/projets/freelanceapp.png',
            'lien_github' => '#',
            'lien_demo' => '#'
        ]);
        Projet::factory()->create([
            'user_id' => 1, // Associe ces projets à l'utilisateur avec ID 1 (Sylla Youssouf)
            'titre' => 'Blogue - WordPress headless et Next.js',
            'description' => 'Création d\'un blogue utilisant WordPress comme backend et Next.js comme frontend, pour une meilleure performance et une expérience utilisateur améliorée.',
            'Processus_creation' => 'Création d\'un blogue utilisant WordPress comme backend et Next.js comme frontend, pour une meilleure performance et une expérience utilisateur améliorée.',
            'slug' => 'blogue-wordpress-headless-nextjs',
            'statut' => 'En cours',
            'category' => 'Web',
            'images' => 'storage/projets/blogperso.png',
            'lien_github' => '#',
            'lien_demo' => '#'
        ]);
        Projet::factory()->create([
            'user_id' => 1, // Associe ces projets à l'utilisateur avec ID 1 (Sylla Youssouf)
            'titre' => 'Site Web - Full Services Point SARL Abidjan',
            'description' => 'Développement d\'un site web pour une entreprise de services complets basée à Abidjan.',
            'Processus_creation' => 'Développement d\'un site web pour une entreprise de services complets basée à Abidjan.',
            'slug' => 'site-web-full-services-point-sarl-abidjan',
            'statut' => 'Terminé',
            'category' => 'Web',
            'images' => 'storage/projets/fsp.png',
            'lien_github' => '#',
            'lien_demo' => 'www.fullservicespoint.com'
        ]);
        Projet::factory()->create([
            'user_id' => 1, // Associe ces projets à l'utilisateur avec ID 1 (Sylla Youssouf)
            'titre' => 'Site WEb - Mashar Immobilier - Abidjan',
            'description' => 'Développement d\'un site web pour une entreprise d\'immobilier basée à Abidjan.',
            'Processus_creation' => 'Développement d\'un site web pour une entreprise d\'immobilier basée à Abidjan.',
            'slug' => 'site-web-mashar-immobilier-abidjan',
            'statut' => 'Terminé',
            'category' => 'Web',
            'images' => 'storage/projets/masharim.png',
            'lien_github' => '#',
            'lien_demo' => 'www.mashar-immobilier.com'
        ]);
    }
}
