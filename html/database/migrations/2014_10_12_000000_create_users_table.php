<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('Phone')->nullable();
            $table->string('About')->nullable();
            $table->string('Hobbies')->nullable();
            $table->enum('role', ["Admin","Agent","Dispatcher","SuperAdmin"])->nullable();
            $table->string('Picture')->nullable();
            $table->string('Company')->nullable();
            $table->string('TimeZone')->nullable();
            $table->string('Address')->nullable();
            $table->integer('IdTypeAgent')->nullable();
            $table->string('DispatcherType')->nullable();
            $table->double('Lat')->nullable();
            $table->double('Lang')->nullable();
            $table->integer('IdAdmin')->unsigned()->index();
            $table->string('AdminLogo')->nullable();
            $table->string('ApkLogo')->nullable();
            $table->string('Code')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
