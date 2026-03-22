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
        //        Schema::dropIfExists('student_personal_details');
        Schema::create('student_personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('registration_no')->unique();
            $table->foreign('registration_no')->references('registration_no')->on('student_auths')->onDelete('cascade');
            $table->string('name');
            $table->date('dob');
            $table->string('phone_no');
            $table->string('gurdian_name')->nullable();
            $table->string('address')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('dp')->nullable();
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
        Schema::dropIfExists('student_personal_details');
    }
};
