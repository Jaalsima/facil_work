<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('skill_id');
            $table->string('description');
            $table->string('location');
            $table->string('place');
            $table->string('tools')->nullable();;
            $table->string('image')->nullable();
            $table->string('date');
            $table->string('address');
            $table->string('status')->default('pending');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('skill_id')->references('id')->on('skills');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_requests');
    }
};