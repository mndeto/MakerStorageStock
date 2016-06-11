<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductStockItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_stockItem', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('stockItem_id');
            $table->integer('adet');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_stockItem');
    }
}
