<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Experience;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    protected $model = Experience::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    //definition des données factices qui serons dans le modèle Experience
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(), // Associe chaque expérience à un utilisateur
            'poste' => fake()->jobTitle(),
            'entreprise' => fake()->company(),
            'Adresse_entreprise' => fake()->address(),
            'periode' => fake()->date(),
            'type_contrat' => fake()->randomElement(['CDD', 'CDI', 'Stage', 'Freelance']),
            'secteur_activite' => fake()->word(),
            'realisation_principale' => fake()->paragraph(),
            // 'equipe_geree',
            'projet_principal' => fake()->sentence(),
            'resultats_obtenus' => fake()->paragraph(),
            'description' => fake()->paragraph()
        ];
    }
}
