<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array de habilidades con sus respectivas categorías
        $skills = [
            // Ejemplo para la categoría 'Fontanería'
            [
                'category' => 'Fontanería',
                'skills' => [
                    'Instalación de tuberías',
                    'Reparación de fugas',
                    'Cambiar grifos',
                    // Agrega más habilidades para la categoría 'Fontanería' si es necesario
                ],
            ],
            // Ejemplo para la categoría 'Electricidad'
            [
                'category' => 'Electricidad',
                'skills' => [
                    'Instalación de cableado',
                    'Reparación de cortocircuitos',
                    'Cambiar interruptores',
                    // Agrega más habilidades para la categoría 'Electricidad' si es necesario
                ],
            ],
            // Agrega más categorías y habilidades según tus necesidades
        ];

        foreach ($skills as $skillData) {
            $category = DB::table('categories')->where('name', $skillData['category'])->first();
            if ($category) {
                foreach ($skillData['skills'] as $skillName) {
                    DB::table('skills')->insert([
                        'category_id' => $category->id,
                        'name' => $skillName,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
