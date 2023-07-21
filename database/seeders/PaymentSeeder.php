<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array de pagos
        $payments = [
            // Ejemplo de pago para la cotización 'Reparación de fuga en la tubería del baño'
            [
                'quotation' => 'Reparación de fuga en la tubería del baño',
                'user' => 'Cliente 1',
                'amount' => 150.00,
                'status' => 'pending',
                'payment_method' => 'credit_card',
                'transaction_id' => 'TX123456789',
            ],
            // Ejemplo de pago para la cotización 'Instalación de nuevos enchufes en la cocina'
            [
                'quotation' => 'Instalación de nuevos enchufes en la cocina',
                'user' => 'Cliente 2',
                'amount' => 80.00,
                'status' => 'completed',
                'payment_method' => 'paypal',
                'transaction_id' => 'PAY987654321',
            ],
            // Agrega más pagos según sea necesario
        ];

        foreach ($payments as $paymentData) {
            $quotation = DB::table('quotations')->where('message', $paymentData['quotation'])->first();
            $user = DB::table('users')->where('name', $paymentData['user'])->first();
            if ($quotation && $user) {
                DB::table('payments')->insert([
                    'user_id' => $user->id,
                    'quotation_id' => $quotation->id,
                    'amount' => $paymentData['amount'],
                    'status' => $paymentData['status'],
                    'payment_method' => $paymentData['payment_method'],
                    'transaction_id' => $paymentData['transaction_id'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
