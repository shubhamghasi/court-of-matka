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
        Schema::create('matka_numbers', function (Blueprint $table) {
            $table->id();
            $table->integer('number_type_id'); // Ank=1, Jodi=2, Panel=3 etc.
            $table->string('panel_number')->nullable(); // Only used if type is Panel
            $table->string('number'); // The actual number or ank
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matka_numbers');
    }
};
