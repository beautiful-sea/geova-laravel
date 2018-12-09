<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserHasAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street',250);
            $table->integer('number');
            $table->string('neighborhood',100);
            $table->string('city',100);
            $table->string('complement',100)->nullable();
            $table->string('zipcode',15);
            $table->char('state',2);
            $table->unsignedInteger('users_id');
            $table->timestamps();
            //Foreigns Key:
            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_address');
    }
}
