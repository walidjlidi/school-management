<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Material;
use App\Models\Tutor;

class MaterialSeeder extends Seeder
{
    public function run(): void
    {
        $tutors = Tutor::all();
        Material::factory(20)->make()->each(function ($material) use ($tutors) {
            $material->tutor_id = $tutors->random()->id;
            $material->save();
        });
    }
}
