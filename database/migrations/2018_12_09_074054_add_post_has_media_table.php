<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostHasMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_has_media', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('posts_id');
            $table->string('media',250);
            $table->timestamps();
            //Foreigns Key:
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
        Schema::dropIfExists('post_has_media');
    }
}
