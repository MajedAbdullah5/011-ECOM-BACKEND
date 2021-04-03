<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewArrivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_arrivals',function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_code');
            $table->string('thumbnail');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->string('title');
            $table->text('description');
            $table->string('price');
            $table->string('discount_price');
            $table->string('special_price');
            $table->string('size');
            $table->string('color');
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
        Schema::dropIfExists('new_arrivals');
    }
}
