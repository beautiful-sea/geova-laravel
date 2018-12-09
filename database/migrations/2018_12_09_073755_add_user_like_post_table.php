<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserLikePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_like_post', function (Blueprint $table) {
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('posts_id');
            $table->timestamps();
            //Foreigns Key:
            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('posts_id')
            ->references('id')->on('posts')
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
        Schema::dropIfExists('user_like_post');
    }
}
