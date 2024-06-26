<?php

namespace Database\Factories;

use App\Models\PlantaFamilia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PlantaFamiliaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PlantaFamilia::class;

    public function definition(): array
    {
        return [
            'scientific_name' => $this->faker->words(2, true),
            'common_name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'type' => 'familia',
        ];
    }
}
