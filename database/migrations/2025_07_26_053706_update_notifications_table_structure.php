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
            // Drop old columns
            $table->dropColumn(['name', 'message_part_1', 'message_part_2', 'location', 'active']);

            // Add new fields
            $table->text('message')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->time('open_time')->nullable();
            $table->time('close_time')->nullable();
        });
    }

    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            // Revert changes
            $table->string('name')->nullable();
            $table->text('message_part_1')->nullable();
            $table->text('message_part_2')->nullable();
            $table->string('location')->nullable();
            $table->boolean('active')->default(true);

            $table->dropColumn(['message', 'start_time', 'end_time', 'open_time', 'close_time']);
        });
    }
};
