<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_carts', function (Blueprint $table) {
            $table->id();
            $table->string('img',1000);
            $table->string('color',1000);
            $table->string('size',1000);
            $table->string('product_name',1000);
            $table->string('product_code',1000);
            $table->string('shop_name',1000);
            $table->string('shop_code',1000);
            $table->string('product_info',1000);
            $table->string('product_quantity',1000);
            $table->string('unit_price',1000);
            $table->string('total_price',1000);
            $table->string('mobile',1000);
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
        Schema::dropIfExists('product_carts');
    }
}
