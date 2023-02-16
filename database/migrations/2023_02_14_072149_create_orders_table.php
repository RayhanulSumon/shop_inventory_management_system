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
        Schema::create('orders', static function (Blueprint $table) {
            $table->id();
            $table->bigInteger('shop_id')->index();
            $table->foreignId('customer_id');
            $table->string('delivery_price');
            $table->decimal('discount_price')->nullable();
            $table->string('total_price');
            $table->tinyInteger('status')->comment('1 = pending, 2 = on the way,  3 = success , 4 = return');
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
        Schema::dropIfExists('orders');
    }
};
