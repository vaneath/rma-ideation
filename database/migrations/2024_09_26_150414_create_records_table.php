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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->enum('car_fuel', ['Gasoline', 'Diesel', 'Electric', 'Hybrid']);
            $table->enum('car_type', ['Sedan', 'SUV', 'Truck', 'Van', 'Sports']);
            $table->string('car_make');
            $table->string('car_model');
            $table->string('car_year');
            $table->enum('car_color', ['Black', 'White', 'Silver', 'Red', 'Blue', 'Green', 'Yellow', 'Orange', 'Purple', 'Brown', 'Gray', 'Pink']);
            $table->enum('review_status', ['Pending', 'Approved', 'Rejected'])->default('Pending');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
