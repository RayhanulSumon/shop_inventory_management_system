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
    public function up(): void
    {
        Schema::create('products', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('shop_id')->index();
            $table->foreignId('category_id')->index();
            $table->foreignId('sub_category_id')->index();
            $table->string('slug');
            $table->string('thumb_image')->default('thumb_image.jpg');
            $table->decimal('price');
            $table->integer('quantity');
            $table->boolean('status')->default(true)->comment('Display Status');
            $table->boolean('discount_status')->default(false)->comment('Discount Status');
            $table->decimal('discount_price')->default(0)->comment('Discount Price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
