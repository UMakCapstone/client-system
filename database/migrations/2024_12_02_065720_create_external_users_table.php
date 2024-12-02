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
        Schema::create('external_users', function (Blueprint $table) {
            $table->id();
            $table->string('accreditation_no')->unique()->nullable();
            $table->string('tc_name');
            $table->string('chair_fname');
            $table->string('chair_mname')->nullable();
            $table->string('chair_lname');
            $table->string('chair_suffix')->nullable();
            $table->string('contact_no')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('external_users');
    }
};
