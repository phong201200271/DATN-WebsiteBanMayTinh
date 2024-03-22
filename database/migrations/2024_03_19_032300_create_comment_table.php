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
        Schema::create('comment', function (Blueprint $table) {
            $table->id('comment_id')->autoIncrement();
            $table->string('content',200);
            $table->dateTime('comment_time');
            $table->unsignedBigInteger('comment_reply_id');
            $table->string('product_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('product_id')->references('product_id')->on('product');
            $table->foreign('user_id')->references('id')->on('user');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
