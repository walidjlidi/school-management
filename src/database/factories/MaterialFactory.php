<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    protected $model = Material::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'tutor_id' => Tutor::factory(),
        ];
    }
}
