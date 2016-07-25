<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ingress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingress', function (Blueprint $table) {
            $table->increments('ingress_id');
            $table->integer('provider_id')->unsigned();
            $table->foreign('provider_id')->references('person_id')->on('person');
            $table->string('proof_type',20);
            $table->string('proof_series',8);
            $table->string('proof_number',10);
            $table->decimal('tax', 4, 2);
            $table->string('state', 20);
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
        Schema::drop('ingress');
    }
}
