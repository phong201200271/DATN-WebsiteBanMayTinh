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
        Schema::create('detail_input_invoice', function (Blueprint $table) {
            $table->id('detail_input_invoice_id')->autoIncrement();
            $table->integer('product_price');
            $table->integer('quantity');
            $table->string('detail_product_id');
            $table->unsignedBigInteger('input_invoice_id');
            $table->foreign('detail_product_id')->references('detail_product_id')->on('detail_product');
            $table->foreign('input_invoice_id')->references('input_invoice_id')->on('input_invoice');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_input_invoice');
    }
};
