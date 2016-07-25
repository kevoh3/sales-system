<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SalesDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesDetails', function (Blueprint $table) {
            $table->increments('details_id');
            $table->integer('sales_id')->unsigned();
            $table->foreign('sales_id')->references('sales_id')->on('sales');
            $table->integer('item_id')->unsigned();
            $table->foreign('item_id')->references('item_id')->on('items');
            $table->decimal('sale_price',11,2);
            $table->decimal('discount',11,2);
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
        Schema::drop('salesDetails');
    }
}
