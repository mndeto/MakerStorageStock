<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockItems', function (Blueprint $table) {
            $table->increments('id');
            
            //$table->string('sku')->unique()->index();
            $table->string('partNumber');
            $table->string('name');
            $table->string('description');
            $table->string('orderInfo');
            $table->integer('inHand');
            $table->integer('low');
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
        Schema::drop('stockItems');
    }
}
