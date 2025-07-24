<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('trends', function (Blueprint $table) {
            $table->boolean('isRefund')->default(false)->after('number_type');
        });
    }

    public function down(): void
    {
        Schema::table('trends', function (Blueprint $table) {
            $table->dropColumn('isRefund');
        });
    }
};
