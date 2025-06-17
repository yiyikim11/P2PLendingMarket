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
        Schema::create('loan_package', function (Blueprint $table) {
            $table->id('loanpackage_id');
            $table->unsignedBigInteger('lender_id');
            $table->string('loan_name');
            $table->decimal('amount',15,2);
            $table->decimal('interest_rate',5,2);
            $table->integer('duration');
            $table->enum('payment_frequency',['monthly','weekly']);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            //FK assumes lender_id comes from users table (if role = lender)
            $table->foreign('lender_id')->references('id')->on('lender')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): voidS
    {
        Schema::dropIfExists('loan_package');
    }
};
