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
        Schema::table('notifications', function (Blueprint $table) {
            // Drop unused columns if they exist
            $table->dropColumn(['open_time', 'close_time']);

            // Keep only start_time and end_time
            // If they don't exist already, uncomment the lines below:
            // $table->time('start_time')->nullable();
            // $table->time('end_time')->nullable();
        });
    }

    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            // Add back open_time and close_time if needed
            $table->time('open_time')->nullable();
            $table->time('close_time')->nullable();
        });
    }
};
