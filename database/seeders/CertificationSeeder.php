<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array de certificaciones para los trabajadores
        $certifications = [
            // Ejemplo para el trabajador 'Juan' en la categoría 'Fontanería'
            [
                'user' => 'Juan',
                'category' => 'Fontanería',
                'expiration_date' => '2024-12-31',
            ],
            // Ejemplo para el trabajador 'María' en la categoría 'Electricidad'
            [
                'user' => 'María',
                'category' => 'Electricidad',
                'expiration_date' => '2023-10-15',
            ],
            // Agrega más certificaciones para otros trabajadores y categorías según sea necesario
        ];

        foreach ($certifications as $certificationData) {
            $user = DB::table('users')->where('name', $certificationData['user'])->first();
            $category = DB::table('categories')->where('name', $certificationData['category'])->first();
            if ($user && $category) {
                DB::table('certifications')->insert([
                    'user_id' => $user->id,
                    'category_id' => $category->id,
                    'expiration_date' => $certificationData['expiration_date'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
