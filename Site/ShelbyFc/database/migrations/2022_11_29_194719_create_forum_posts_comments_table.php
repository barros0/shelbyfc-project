<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_posts_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->foreign('user_id')->references('id')->on('users');
            $table->integer('post_id')->foreign('post_id')->references('id')->on('post_id');
            $table->integer('reply_id')->foreign('reply_id')->references('id')->on('forum_posts_comments');
            $table->text('comment');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forum_posts_comments');
    }
};
