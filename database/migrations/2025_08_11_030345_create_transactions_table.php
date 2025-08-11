<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable()->index();  // User making the transaction
            $table->string('upi_id')->nullable();       // UPI ID receiving the payment (readonly)
            $table->string('promo_code')->nullable();   // Promo code applied (optional)
            $table->string('transaction_id')->nullable(); // Transaction ID entered by user
            $table->string('upi_address')->nullable();  // User's UPI address (entered in form)

            $table->decimal('amount', 15, 2)->nullable();  // Amount (optional, if you want to store)
            $table->string('status')->default('pending'); // e.g. pending, success, failed

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
