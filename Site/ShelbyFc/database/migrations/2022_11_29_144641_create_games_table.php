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
            /*$table->string('title');
            $table->string('small_description')->nullable();
            $table->text('description')->nullable();*/
            $table->boolean('ticket_available');
            $table->float('ticket_price')->nullable();
            $table->float('ticket_price_partner')->nullable();
            $table->integer('result_home')->nullable();
            $table->integer('result_opponent')->nullable();
            $table->string('location');
            $table->string('image')->nullable();
            $table->bigInteger('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->dateTime('limit_bet');
            $table->dateTime('limit_buy_ticket')->nullable();
            $table->integer('stock_tickets')->nullable();
            $table->dateTime('datetime_game');
            $table->float('win');
            $table->float('draw');
            $table->float('lose');
            $table->enum('result', ['win','draw', 'lose'])->nullable();
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
