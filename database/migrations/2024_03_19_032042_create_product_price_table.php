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
        Schema::create('product_price', function (Blueprint $table) {
            $table->id('product_price_id')->autoIncrement();
            $table->integer('price');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('type');
            $table->float('discount')->nullable();
            $table->string('detail_product_id');
            $table->foreign('detail_product_id')->references('detail_product_id')->on('detail_product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_price');
    }
};
