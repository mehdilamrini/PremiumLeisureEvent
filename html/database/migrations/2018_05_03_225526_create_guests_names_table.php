<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests_names', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idBooking')->unsigned()->index();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Details');


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
        Schema::dropIfExists('guests_names');
    }
}
