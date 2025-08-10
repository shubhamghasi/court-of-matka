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
        // Drop the table if it exists
        Schema::dropIfExists('matka_bets');

        // Create the table again
        Schema::create('matka_bets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('market_id');
            $table->unsignedBigInteger('number_type_id');
            $table->unsignedBigInteger('number_id');
            $table->decimal('amount', 10, 2);
            $table->timestamps();

            // Optional: Add foreign keys if needed
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('market_id')->references('id')->on('markets')->onDelete('cascade');
            // $table->foreign('number_type_id')->references('id')->on('number_types')->onDelete('cascade');
            // $table->foreign('number_id')->references('id')->on('numbers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matka_bets');
    }
};
