<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ejemplo de mensajes
        $messages = [
            // Mensaje entre cliente y trabajador sobre una solicitud de trabajo específica
            [
                'job_request' => 'Reparación de fuga en la tubería del baño',
                'sender' => 'Cliente 1',
                'recipient' => 'Trabajador 1',
                'message' => 'Hola, ¿puedes venir a revisar la fuga en mi baño mañana por la mañana?',
            ],
            // Mensaje entre trabajador y cliente sobre una cotización específica
            [
                'job_request' => 'Instalación de nuevos enchufes en la cocina',
                'sender' => 'Trabajador 2',
                'recipient' => 'Cliente 2',
                'message' => 'Sí, puedo hacer la instalación. Te enviaré una cotización pronto.',
            ],
            // Agrega más mensajes según sea necesario
        ];

        foreach ($messages as $messageData) {
            $jobRequest = DB::table('job_requests')->where('title', $messageData['job_request'])->first();
            $sender = DB::table('users')->where('name', $messageData['sender'])->first();
            $recipient = DB::table('users')->where('name', $messageData['recipient'])->first();
            if ($jobRequest && $sender && $recipient) {
                DB::table('messages')->insert([
                    'job_request_id' => $jobRequest->id,
                    'sender_id' => $sender->id,
                    'recipient_id' => $recipient->id,
                    'message' => $messageData['message'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
