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
        //
        Schema::table('notifications', function (Blueprint $table) {
            $table->string('name');
            $table->string('message_part_1');
            $table->string('message_part_2');
            $table->string('location')->nullable();
            $table->dropColumn('message'); // optional if you're refactoring
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
