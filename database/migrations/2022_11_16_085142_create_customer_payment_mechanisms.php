<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_payment_mechanisms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_mechanisms_id')->references('id')->on('Payment Mechanisms')->nullable();
            $table->foreignId('customer_id')->references('id')->on('Customers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_payment_mechanisms');
    }
};