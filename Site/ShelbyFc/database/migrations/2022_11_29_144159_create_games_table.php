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
        Schema::create('Games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('small_description');
            $table->text('description');
            $table->boolean('ticket_available');
            $table->float('ticket_price');
            $table->float('ticket_price_partner');
            $table->integer('result_home');
            $table->integer('result_opponent');
            $table->string('location');
            $table->string('image');
            $table->integer('team_id')->foreign('team_id')->references('id')->on('teams');
            $table->dateTime('limit_bet');
            $table->dateTime('limit_buy_ticket');
            $table->integer('stock_tickets');
            $table->dateTime('datetime_game');
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
        Schema::dropIfExists('Games');
    }
};
