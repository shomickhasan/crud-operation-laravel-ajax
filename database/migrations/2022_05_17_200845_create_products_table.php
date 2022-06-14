<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('productName');
            $table->text('productDrescreption');
            $table->string('productCatagories');
            $table->string('productSize');
            $table->integer('productParchesPrice');
            $table->integer('productSellPrice');
            $table->integer('ProductQuantity')->nulable();
            $table->integer('productStatus')->default(1)->comment('1 for active o for inactive');
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
        Schema::dropIfExists('products');
    }
}
