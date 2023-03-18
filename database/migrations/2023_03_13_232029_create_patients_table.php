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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->unsignedBigInteger('n_number');
            $table->string('phone_number', 20);
            $table->unsignedBigInteger('file_no')->unique()->default(mt_rand(1, 9999999999));
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->unsignedInteger('height');
            $table->unsignedInteger('weight');
            $table->enum('blood_type', ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']);
            $table->string('disease_name');
            $table->string('description_disease');
            $table->enum('gender', ['male', 'female']);
            $table->rememberToken();
            $table->decimal('patient_rate')->nullable();
            $table->unsignedBigInteger('supervisor_id')->nullable();
            $table->foreign('supervisor_id')->references('id')->on('supervisors')->onDelete('cascade');
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
