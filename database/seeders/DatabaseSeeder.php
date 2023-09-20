<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        $this->call(CertificationSeeder::class);
        $this->call(JobRequestSeeder::class);
        $this->call(JobReviewSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(QuotationSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(UserSeeder::class);
    }
}