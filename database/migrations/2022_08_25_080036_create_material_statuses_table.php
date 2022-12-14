<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('marital_status')->nullable();
            $table->string('partner_name');
            $table->unsignedInteger('partner_identification_number');
            $table->string('phone');
            $table->string('partner_family_address');
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
        Schema::dropIfExists('material_statuses');
    }
};