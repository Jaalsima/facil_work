<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array de revisiones o calificaciones
        $reviews = [
            // Ejemplo de revisión para la solicitud de trabajo 'Reparación de fuga en la tubería del baño'
            [
                'job_request' => 'Reparación de fuga en la tubería del baño',
                'user' => 'Cliente 1',
                'rating' => 5,
                'comment' => 'El trabajador hizo un excelente trabajo en la reparación. ¡Altamente recomendado!',
            ],
            // Ejemplo de revisión para la solicitud de trabajo 'Instalación de nuevos enchufes en la cocina'
            [
                'job_request' => 'Instalación de nuevos enchufes en la cocina',
                'user' => 'Cliente 2',
                'rating' => 4,
                'comment' => 'El trabajo fue muy bueno, pero hubo un pequeño retraso en la llegada del trabajador.',
            ],
            // Agrega más revisiones según sea necesario
        ];

        foreach ($reviews as $reviewData) {
            $jobRequest = DB::table('job_requests')->where('title', $reviewData['job_request'])->first();
            $user = DB::table('users')->where('name', $reviewData['user'])->first();
            if ($jobRequest && $user) {
                DB::table('job_reviews')->insert([
                    'job_request_id' => $jobRequest->id,
                    'user_id' => $user->id,
                    'rating' => $reviewData['rating'],
                    'comment' => $reviewData['comment'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
