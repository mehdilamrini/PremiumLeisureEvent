<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateGolfTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_golf_trans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idBooking')->unsigned()->index();
            $table->string('Date')->nullable();
            $table->string('GolfClub')->nullable();
            $table->string('DepartureTime')->nullable();
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
        Schema::dropIfExists('private_golf_trans');
    }
}
