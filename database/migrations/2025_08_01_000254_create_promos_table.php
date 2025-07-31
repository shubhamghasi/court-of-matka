<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromosTable extends Migration
{
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // Promo code
            $table->decimal('discount_amount', 8, 2)->nullable(); // Flat discount (optional)
            $table->integer('discount_percent')->nullable(); // Percent discount (optional)
            $table->integer('max_uses')->nullable(); // Total allowed uses
            $table->integer('uses')->default(0); // Number of times used
            $table->timestamp('expires_at')->nullable(); // Expiry date/time
            $table->boolean('is_active')->default(true); // Promo active or not
            $table->boolean('is_valid_on_trends')->default(0);
            $table->boolean('is_valid_on_doubt')->default(0);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('promos');
    }
};
