<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IngressDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingressDetails', function (Blueprint $table) {
            $table->increments('details_id');
            $table->integer('ingress_id')->unsigned();
            $table->foreign('ingress_id')->references('ingress_id')->on('ingress');
            $table->integer('item_id')->unsigned();
            $table->foreign('item_id')->references('item_id')->on('items');
            $table->integer('quantity');
            $table->decimal('purchase_price',11,2);
            $table->decimal('sale_price',11,2);
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
        Schema::drop('ingressDetails');
    }
}
