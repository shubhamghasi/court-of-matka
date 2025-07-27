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
        Schema::table('doubt_checks', function (Blueprint $table) {
            $table->string('accuracy')->nullable()->after('status');
        });
    }

    public function down()
    {
        Schema::table('doubt_checks', function (Blueprint $table) {
            $table->dropColumn('accuracy');
        });
    }
};
