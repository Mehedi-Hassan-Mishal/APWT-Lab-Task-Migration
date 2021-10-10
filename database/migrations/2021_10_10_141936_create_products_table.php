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
            $table->string(column: 'p_name');
            $table->integer(column: 'p_code');
            $table->string(column: 'p_desc');
            $table->string(column: 'p_category');
            $table->double(column: 'p_price');
            $table->string(column: 'p_quantity');
            $table->string(column: 'p_stock_date');
            $table->double(column: 'p_rating');
            $table->string(column: 'p_purchased');
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
