<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('sales_id');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('person_id')->on('person');
            $table->string('proof_type',20);
            $table->string('proof_series',8);
            $table->string('proof_number',10);
            $table->decimal('sale_price',11,2);
            $table->string('status',20);
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
        Schema::drop('sales');
    }
}
