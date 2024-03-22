<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('input_invoice', function (Blueprint $table) {
            $table->id('input_invoice_id')->autoIncrement();
            $table->date('input_date');
            $table->integer('total_price');
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('provider_id')->references('provider_id')->on('provider');
            $table->foreign('employee_id')->references('employee_id')->on('employee');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('input_invoice');
    }
};
