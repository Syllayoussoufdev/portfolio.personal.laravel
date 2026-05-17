<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projet>
 */
class ProjetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(), // Associe un utilisateur à chaque projet
            'titre' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'slug' => $this->faker->slug(),
            'statut' => $this->faker->randomElement(['En cours', 'Terminé', 'En production', 'Publié']),
            'category' => $this->faker->randomElement(['Web', 'Mobile', 'Desktop', 'automatisation', 'AI','Data','Autre']),
            'images' => $this->faker->randomElements(['assets/images/image1.jpg', 'assets/images/image2.jpg', 'assets/images/image3.jpg']), // Vous pouvez ajouter des chemins d'images fictifs ici si nécessaire
            'lien_github' => $this->faker->url(),
            'lien_demo' => $this->faker->url(),
            'Processus_creation' => $this->faker->paragraph(),
        ];
    }
}
