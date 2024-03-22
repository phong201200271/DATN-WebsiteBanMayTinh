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
        Schema::create('detail_product', function (Blueprint $table) {
            $table->string('detail_product_id')->primary();
            $table->string('name',100);
            $table->string('thumbnail');
            $table->string('description')->nullable();
            $table->integer('status');
            $table->string('product_id');
            $table->foreign('product_id')->references('product_id')->on('product');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_product');
    }
};
