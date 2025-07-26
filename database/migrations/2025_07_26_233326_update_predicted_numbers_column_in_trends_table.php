<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('trends', function (Blueprint $table) {
            $table->text('predicted_numbers')->nullable()->change(); // Ensure it can store JSON
        });
    }

    public function down()
    {
        Schema::table('trends', function (Blueprint $table) {
            $table->string('predicted_numbers')->nullable()->change(); // Revert if needed
        });
    }
};
