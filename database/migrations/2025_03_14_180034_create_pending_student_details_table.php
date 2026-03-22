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
        Schema::create('pending_student_details', function (Blueprint $table) {
            $table->id();
            $table->string('registration_no')->unique();
            $table->foreign('registration_no')->references('registration_no')->on('student_auths')->onDelete('cascade');
            $table->string('name');
            $table->date('dob');
            $table->string('phone_no');
            $table->string('department');
            $table->integer('semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pending_student_details');
    }
};
