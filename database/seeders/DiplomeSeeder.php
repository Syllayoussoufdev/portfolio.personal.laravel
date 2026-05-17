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
        Diplome::factory()->create([
            'user_id' => 1, // Associe ce diplôme à l'utilisateur avec ID 1 (Sylla Youssouf)
            'nom_diplome' => 'BTS Informatique Développeur d\'Applications',
            'annee_obtention' => 2023,
            'type_diplome' => 'Autre',        
            'centre_formateur' => 'ISFMI(Institut Supperieur de formation au Metier de l\'Informatique) Abidjan',
            'niveau_diplome' => 'Bac+2',
            'domaine_etude' => 'Informatique',
            'description' => 'Formation axée sur le développement d\'applications informatiques, couvrant les langages de programmation, les bases de données, et les méthodologies de développement.',
            
        ]); 
        
        Diplome::factory()->create([
            'user_id' => 1, // Associe ce diplôme à l'utilisateur avec ID 1 (Sylla Youssouf)
            'nom_diplome' => 'BAC Scientifique Série D',
            'annee_obtention' => 2021,
            'type_diplome' => 'Autre',        
            'centre_formateur' => 'Lycée Municipal de Koumassi - Abidjan',
            'niveau_diplome' => 'Bac',
            'domaine_etude' => 'Informatique',
            'description' => 'Formation générale axée sur les sciences, avec une spécialisation en mathématiques et physique, fournissant une base solide pour les études supérieures en informatique.',
            
        ]);   
        
        Diplome::factory()->create([
            'user_id'=>1,
            'nom_diplome' => 'Certificat en Marketing digitale',
            'annee_obtention' => 2024,
            'type_diplome' => 'Certificat',
            'centre_formateur' => 'AJNV(Association des Jeunes pour la Nouvelle Vision) Abidjan',
            'niveau_diplome' => '', // Ce champ est optionnel pour les certificats
            'domaine_etude' => 'Marketing',
            'description' => 'Formation axée sur les stratégies de marketing digital, incluant la gestion des réseaux sociaux, le référencement, et les campagnes publicitaires en ligne.',
            
        ]);
        
        Diplome::factory()->create([
            'user_id'=>1,
            'nom_diplome' => 'Certificat PHP - Laravel',
            'annee_obtention' => 2025,
            'type_diplome' => 'Certificat',
            'centre_formateur' => 'Openclasroom & Orange Digitale Center Abidjan',
            'niveau_diplome' => '', // Ce champ est optionnel pour les certificats
            'domaine_etude' => 'Informatique',
            'description' => 'Formation axée sur l\'apprentissage de PHP et Laravel, couvrant les bases du développement web avec ces technologies.',
          ]);

        Diplome::factory()->create([
            'user_id'=>1,
            'nom_diplome' => 'Prompt Engineering Generative AI for Marketing & Advertising',
            'annee_obtention' => 2025,
            'type_diplome' => 'Certificat',
            'centre_formateur' => 'Orange Digitale Center Abidjan',
            'niveau_diplome' => '', // Ce champ est optionnel pour les certificats
            'domaine_etude' => 'informatique',
            'description' => 'Formation axée sur l\'utilisation de l\'intelligence artificielle générative pour le marketing et la publicité, couvrant les techniques de prompt engineering pour optimiser les résultats des campagnes publicitaires.',
          ]);

        
        Diplome::factory()->create([
            'user_id'=>1,
            'nom_diplome' => 'Web Development in React.js: Development Basics en partenaria avec Coursera',
            'annee_obtention' => 2025,
            'type_diplome' => 'Certificat',
            'centre_formateur' => 'Orange Digitale Center Abidjan',
            'niveau_diplome' => '', // Ce champ est optionnel pour les certificats
            'domaine_etude' => 'informatique',
            'description' => 'Formation axée sur l\'utilisation de l\'intelligence artificielle générative pour le marketing et la publicité, couvrant les techniques de prompt engineering pour optimiser les résultats des campagnes publicitaires.',
          ]);
    
    }
}
