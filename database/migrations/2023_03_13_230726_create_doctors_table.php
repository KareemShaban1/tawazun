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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('full_name');
            $table->unsignedBigInteger('n_number')->unique();
            $table->string('job_description');
            $table->unsignedBigInteger('Job_ID');
            $table->date('date_of_birth');
            $table->integer('years_of_experience');
            $table->string('phone_number', 20);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->enum('gender', ['male', 'female']);
            $table->rememberToken();
            $table->string('nationality');
            $table->string('about')->nullable();
            $table->decimal('Doctor_rate')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->unsignedBigInteger('supervisor_id')->nullable();
            $table->foreign('supervisor_id')->references('id')->on('supervisors')->onDelete('cascade');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
