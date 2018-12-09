<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersFollowUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_follow_users', function (Blueprint $table) {
            $table->unsignedInteger('users_id_follow');
            $table->unsignedInteger('users_id_followed');
            $table->timestamps();
            //Foreign Keys:
            $table->foreign('users_id_follow')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('users_id_followed')
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
        Schema::dropIfExists('users_follow_users');
    }
}
