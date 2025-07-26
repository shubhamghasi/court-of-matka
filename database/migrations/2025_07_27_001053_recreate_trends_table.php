<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Drop the existing table if it exists
        Schema::dropIfExists('trends');

        // Create the new trends table
        Schema::create('trends', function (Blueprint $table) {
            $table->id();

            $table->json('predicted_numbers')->nullable();
            $table->string('transaction_id')->unique();
            
            $table->foreignId('market_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('number_type'); // Related to NumberType model
            $table->boolean('isRefund')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Foreign key for number_type (if table name is 'number_types')
            $table->foreign('number_type')->references('id')->on('number_types')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trends');
    }
};
