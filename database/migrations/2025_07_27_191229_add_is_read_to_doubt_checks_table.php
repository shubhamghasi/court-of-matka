<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsReadToDoubtChecksTable extends Migration
{
    public function up(): void
    {
        Schema::table('doubt_checks', function (Blueprint $table) {
            $table->boolean('is_read')->default(false)->after('status');
        });
    }

    public function down(): void
    {
        Schema::table('doubt_checks', function (Blueprint $table) {
            $table->dropColumn('is_read');
        });
    }
}
