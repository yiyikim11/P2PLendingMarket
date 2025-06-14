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
        Schema::create('lender_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id'); // FK
            $table->string('occupation');
            $table->string('salary_range');
            $table->string('address');
            $table->string('phone_number');
            $table->string('id_card');
            $table->string('profile_pic')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lender_profiles');
    }
};
