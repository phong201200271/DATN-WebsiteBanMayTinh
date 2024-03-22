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
        Schema::create('product_attribute', function (Blueprint $table) {
            $table->id('product_attribute')->autoIncrement();
            $table->string('detail_product_id');
            $table->unsignedBigInteger('attribute_id');
            $table->foreign('detail_product_id')->references('detail_product_id')->on('detail_product');
            $table->foreign('attribute_id')->references('attribute_id')->on('attribute');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_attribute');
    }
};
