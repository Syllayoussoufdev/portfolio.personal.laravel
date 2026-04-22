<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Competence;
use faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competence>
 */
class CompetenceFactory extends Factory
{
    protected $model = Competence::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Simuler des noms de compétences aléatoires
            'nom_competence' => $this->faker->unique()->word().' Dev',
            // Niveau de compétence entre 1 et 10
            'niveau' => $this->faker->numberBetween(1, 10),
            // Pourcentage de maîtrise entre 10 et 100
            'pourcentage' => $this->faker->numberBetween(10, 100),
            // Type de compétence
            'category' => $this->faker->randomElement(['Professionnelle', 'Language', 'Informatiques', 'Soft Skills']),
            // Description aléatoire
            'description' => $this->faker->sentence(),
            // Icone aléatoire (exemple de classes FontAwesome)
            'icon' => $this->faker->randomElement([
                'fa-solid fa-code',
                'fa-solid fa-briefcase',
                'fa-solid fa-laptop-code',
                'fa-solid fa-cogs',
                'fa-solid fa-users',
            ]),
        ];
    }
}
