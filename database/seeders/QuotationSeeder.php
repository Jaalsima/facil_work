<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array de cotizaciones
        $quotations = [
            // Ejemplo de cotización para la solicitud de trabajo 'Reparación de fuga en la tubería del baño'
            [
                'job_request' => 'Reparación de fuga en la tubería del baño',
                'user' => 'Trabajador 1',
                'price' => 150.00,
                'time_estimate' => '2 días',
                'message' => 'Hola, puedo realizar la reparación de la fuga en la tubería del baño. Tengo experiencia en trabajos de fontanería.',
                'status' => 'pending',
            ],
            // Ejemplo de cotización para la solicitud de trabajo 'Instalación de nuevos enchufes en la cocina'
            [
                'job_request' => 'Instalación de nuevos enchufes en la cocina',
                'user' => 'Trabajador 2',
                'price' => 80.00,
                'time_estimate' => '1 día',
                'message' => 'Buen día, puedo realizar la instalación de los nuevos enchufes en la cocina. Cuento con las herramientas necesarias.',
                'status' => 'pending',
            ],
            // Agrega más cotizaciones según sea necesario
        ];

        foreach ($quotations as $quotationData) {
            $jobRequest = DB::table('job_requests')->where('title', $quotationData['job_request'])->first();
            $user = DB::table('users')->where('name', $quotationData['user'])->first();
            if ($jobRequest && $user) {
                DB::table('quotations')->insert([
                    'job_request_id' => $jobRequest->id,
                    'user_id' => $user->id,
                    'price' => $quotationData['price'],
                    'time_estimate' => $quotationData['time_estimate'],
                    'message' => $quotationData['message'],
                    'status' => $quotationData['status'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
