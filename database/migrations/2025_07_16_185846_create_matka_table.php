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
        Schema::create('matka_bets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->integer('market_id');
            $table->string('bet_number');
            $table->bigInteger('bet_amount');
            $table->string('transaction_id');
            $table->timestamps();
            $table->softDeletes();
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
