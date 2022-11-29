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
        Schema::create('logs_login', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->foreign('user_id')->references('id')->on('users');
            $table->string('email')->nullable();
            $table->string('ip')->nullable();
            $table->string('location')->nullable();
            $table->string('agent')->nullable();
            $table->enum('state', ['Success', 'Failed']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs_login');
    }
};
