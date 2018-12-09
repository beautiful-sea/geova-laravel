<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserLikeCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_like_comment', function (Blueprint $table) {
            $table->unsignedInteger('comments_id');
            $table->unsignedInteger('users_id');
            //Foreigns Key:
            $table->foreign('comments_id')
            ->references('id')->on('comments')
            ->onDelete('cascade');
            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
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
        Schema::dropIfExists('user_like_comment');
    }
}
