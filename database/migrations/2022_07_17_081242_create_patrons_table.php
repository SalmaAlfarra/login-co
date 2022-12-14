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
        Schema::create('patrons', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->unsignedInteger('status')->nullable();
            $table->unsignedInteger('file_number')->nullable();
            $table->unsignedInteger('identification_number')->nullable();
            $table->string('government_service_portal_password')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('city_id')->references('id')->on('Cities')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_type')->nullable();
            $table->string('employer')->nullable();
            $table->foreignId('bank_id')->references('id')->on('Banks')->nullable();
            $table->foreignId('branch_id')->references('id')->on('Branches')->nullable();
            $table->unsignedInteger('bank_account_number')->nullable();
            $table->unsignedFloat('salary')->nullable();
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
        Schema::dropIfExists('patrons');
    }
};
