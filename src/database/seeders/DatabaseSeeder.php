<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            StudentSeeder::class,
            TutorSeeder::class,
            MaterialSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
