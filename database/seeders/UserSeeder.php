<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crée 10 utilisateurs avec des données aléatoires
        User::factory()->count(10)->create();

        // Optionnel : Créer un utilisateur spécifique (ex: Admin)
        User::factory()->create([
            'name' => 'Sly Sylla',
            'email' => 'admin@Sylla.com',
            'password' => bcrypt('Sly1209'),
            'titre_professionnel' => 'Administrateur Système',
            'biographie' => 'Administrateur principal de l\'application.',
            'photo_profil' => 'https://via.placeholder.com/200',
            'cv' => 'https://example.com/cv_admin.pdf',
            //'rolle' => 'admin',
        ]);
    }
}
