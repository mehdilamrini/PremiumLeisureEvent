<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned()->index();
            $table->string('date');
            $table->string('to');
            $table->string('tel');
            $table->string('email');
            $table->string('ustldnr');
            $table->increments('conf_invoice');
            $table->string('free_golf_shuttles');
            $table->string('caddies_buggies');
            $table->float('amount');
            $table->string('amount_details');
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
        Schema::dropIfExists('bookings');
    }
}
