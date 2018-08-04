<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idBooking')->unsigned()->index();
            $table->string('Customer');
            $table->string('Logo_file');
            $table->string('Name');
            $table->string('City');
            $table->string('Location');
            $table->string('Colleague');
            $table->string('Number_pers');
            $table->string('Number_office');




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
        Schema::dropIfExists('vouchers');
    }
}
