<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoryModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategory_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoryId');
            $table->string('slug');
            $table->string('subcategoryName');
            $table->string('subcategoryDrescreption');
            $table->string('image');
            $table->integer('status')->default(1)->comment('1 for active 0 for deactive');
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
        Schema::dropIfExists('subcategory_models');
    }
}
