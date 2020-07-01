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
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('group');
            $table->unsignedSmallInteger('status');
            $table->integer('price');
            $table->string('sale_price')->nullable();
            $table->string('image');
            $table->text('caption');
            $table->text('description');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brend_id');
            $table->unsignedBigInteger('product_profile_id')->nullable();
            $table->timestamps();

            $table->index('product_profile_id');
            $table->index('category_id');
            $table->index('brend_id');
            $table->index('color_id');
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
