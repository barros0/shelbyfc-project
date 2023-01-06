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
        Schema::create('bets_payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bet_id')->unsigned();
            $table->foreign('bet_id')->references('id')->on('bets');
            $table->string('paypal_id');
            $table->dateTime('date')->nullable();
            $table->text('response')->nullable();
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
        Schema::dropIfExists('bets_payments');
    }
};
