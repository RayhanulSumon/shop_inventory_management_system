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
    public function up()
    {
        Schema::create('product__details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->longText('description')->nullable();
            $table->integer('serial_no')->nullable();
            $table->string('meta_description')->nullable();;
            $table->string('meta_keyword')->nullable();;
            $table->string('warranty')->nullable()->comment('Product warranty time/year');
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
        Schema::dropIfExists('product__details');
    }
};
